<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_items extends Model
{
    //
    protected $table = 'tbl_items';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['iname','iquantity','itotal','reciept_id','categories_id'];
    public function item(){

        return $this->belongsToMany(tbl_categories::class);
    }


}
