<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_vendor extends Model
{
    //
    protected $table = 'tbl_vendors';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name'];

}
