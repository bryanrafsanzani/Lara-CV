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
        'birth',
        'gender',
        'picture',
        'username',
        ];  
        
    public function addData($name, $picture, $address, $phone, $email, $about, $socmed, $github, $gender, $birth, $username){
        profile::create([    
            'name' => $name,
            'picture' => $picture,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'about_me' => $about,
            'social_media' => $socmed,
            'github' => $github,
            'gender' => $gender,
            'birth' => $birth,
            'username' => $username,
        ]);
    }

    public function updateData($name, $picture, $address, $phone, $email, $about, $socmed, $github, $gender, $birth){
        profile::update([    
            'name' => $name,
            'picture' => $picture,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'about_me' => $about,
            'social_media' => $socmed,
            'github' => $github,
            'gender' => $gender,
            'birth' => $birth,
        ]);
    }

}
