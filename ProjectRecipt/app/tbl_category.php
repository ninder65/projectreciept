<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_category extends Model
{
    //
    protected $table = 'tbl_categories';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name','datetime'];


}
