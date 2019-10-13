<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $table = "experience";
    public $timestamps = false;
    protected $primaryKey = "id";


    protected $fillable = [
        'id', 
        'exp_name',
        'exp_title', 
        'exp_description', 
        'exp_image', 
        'exp_start',
        'exp_end',
        'login_id',
        ];   
}
