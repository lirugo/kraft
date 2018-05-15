<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductKraft extends Model
{
    //Select connection to mssql
    protected $connection = 'sqlsrv';
    //Select table
    protected $table = '_Reference267';

    /**
     * @param $id
     * @return mixed
     */
    protected function getProduct($id){
        return $this->get()->where('_Code','=',$id)->first();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getPrice(){
        $price = ProductPriceKraft::get()->where('_Fld46248RRef','=',$this->_IDRRef)->first();
        return $price->_Fld46251;
    }

}
