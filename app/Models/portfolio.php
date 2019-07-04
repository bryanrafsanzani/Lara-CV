<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $table = "portfolio";
    public $timestamps = false;
    protected $primaryKey = "prt_id";


    protected $fillable = [
        'prt_id', 
        'prt_name',
        'prt_title', 
        'prt_description', 
        'prt_image', 
        'prt_start',
        'prt_end',
        ];   
        
}
