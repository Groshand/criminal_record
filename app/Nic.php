<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Nic extends Model implements Authenticatable
{
    public function __construct()
    {
        $name=session('name');
    }

    use \Illuminate\Auth\Authenticatable;
    protected $guard='nic';
}
