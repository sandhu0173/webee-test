<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $with=['children'];
    function children(){

        return $this->hasMany(MenuItem::class,'parent_id');
    }
}   
