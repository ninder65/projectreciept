<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_item extends Model
{
    //
    protected $table = 'tbl_items';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name','quantity','total'];

    public function tbl_item(){

       return $this->belongsToMany(tbl_reciepts::class);
    }

}
