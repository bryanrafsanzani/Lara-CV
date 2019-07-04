<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = "login";
    public $timestamps = false;
    protected $primaryKey = "username";


    protected $fillable = [
        'username', 
        'password',
        ];   
}
