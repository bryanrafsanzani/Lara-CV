<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = "profile";
    public $timestamps = false;
    protected $primaryKey = "profile_id";


    protected $fillable = [
        'profile_id', 
        'name',
        'address', 
        'phone', 
        'email', 
        'about_me',
        'social_media',
        'github',
        'username',
        ];   

}
