<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements \Illuminate\contracts\Auth\Authenticatable
{
    use Authenticatable;
}
