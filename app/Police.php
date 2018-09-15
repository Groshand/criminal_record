<?php

namespace App;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Police extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $guard='police';
}
