<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reciepts extends Model
{
    //

    protected $table = 'reciepts';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['reciept_name','reciept_total','vendor_name','date','item1_name','item1_quantity','item1_price','item2_name','item2_quantity','item2_price','item3_name','item3_quantity','item3_price','item4_name','item4_quantity','item4_price','item5_name','item5_quantity','item5_price','item6_name','item6_quantity','item6_price','item7_name','item7_quantity','item7_price','item8_name','item8_quantity','item8_price','item9_name','item9_quantity','item9_price','item10_name','item10_quantity','item10_price'];



}
