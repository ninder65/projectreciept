<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_reciept extends Model
{
    //
    protected $table = 'tbl_reciepts';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['vendor_id','item_id','categories_id','items_total_cost','date','pic','user_id'];
    public function item(){

        return $this->belongsToMany(tbl_items::class);
    }


}
