<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $table = "experience";
    public $timestamps = false;
    protected $primaryKey = "exp_id";


    protected $fillable = [
        'exp_id', 
        'exp_name',
        'exp_title', 
        'exp_description', 
        'exp_image', 
        'exp_start',
        'exp_end',
        ];   
}
