<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $table = "portfolio";
    public $timestamps = false;
    protected $primaryKey = "id";


    protected $fillable = [
        'id', 
        'prt_name',
        'prt_title', 
        'prt_description', 
        'prt_image', 
        'prt_start',
        'login_id',
        ];   
        
}
