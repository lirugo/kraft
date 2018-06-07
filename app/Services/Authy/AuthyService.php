<?php

namespace App\Services\Authy;

use App\Company;
use App\User;
use Authy\AuthyApi;
use Authy\AuthyFormatException;

use App\Services\Authy\Exceptions\SmsRequestFailedException;
use App\Services\Authy\Exceptions\RegistrationFailedException;
use App\Services\Authy\Exceptions\InvalidTokenException;
use Illuminate\Support\Facades\Session;


class AuthyService {

    private $client;

    public function __construct(AuthyApi $client){
        $this->client = $client;
    }

    public function registerUser(User $user){
        $user = $this->client->registerUser(
            $user->email,
            substr($user->phone,4,9),
            '+380'
        );
        if(!$user->ok()){
            throw new RegistrationFailedException;
        }

        return $user->id();
    }

    public function verifyToken($token, User $user = null){
        try {
            $verification = $this->client->verifyToken(
                $user ? $user->authy_id : request()->session()->get('authy.authy_id'),
                $token
            );
        } catch (AuthyFormatException $e) {
            throw new InvalidTokenException;
        }

        if(!$verification->ok()){
            throw new InvalidTokenException;
        }

        return true;
    }

    public function requestSms(User $user){
        $request = $this->client->requestSms($user->authy_id, [
            'force' => true
        ]);

        if(!$request->ok()){
            throw new SmsRequestFailedException;
        }
    }
}