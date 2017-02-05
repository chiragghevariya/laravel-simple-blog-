<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //
    protected $fillable =['quote','author_id'];

    public  function author(){

        return $this->belongsTo('App\Author');
    }
}
