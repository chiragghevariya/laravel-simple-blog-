<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //

    protected $fillable = ['name','email'];

    public function quotes(){

        return $this->hasMany('App\Quote');
    }
}
