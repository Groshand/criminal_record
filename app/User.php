<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $guard='web';


    public function python(){
        $command = escapeshellcmd("E:\laravel\criminal_record\public\python/find.py");
        $output = shell_exec($command);
        return $output;
    }
}