<?php
/**
 * Created by PhpStorm.
 * User: small
 * Date: 9/12/2018
 * Time: 1:43 PM
 */

namespace App\Http;


class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    /**
     * Cart constructor.
     */
    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $vendor_code, $count){
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items){
            if(array_key_exists($vendor_code, $this->items)){
                $storedItem = $this->items[$vendor_code];
            }
        }

        $storedItem['qty'] += $count;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$vendor_code] = $storedItem;
        $this->totalQty += $count;
        $this->totalPrice += $storedItem['price'];
    }

    public function removeItem($vendor_code){
        $this->totalQty -= $this->items[$vendor_code]['qty'];
        $this->totalPrice -= $this->items[$vendor_code]['price'];
        unset($this->items[$vendor_code]);
    }


}