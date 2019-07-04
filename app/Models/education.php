<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $table = "education";
    public $timestamps = false;
    protected $primaryKey = "edu_id";


    protected $fillable = [
        'edu_id', 
        'edu_name',
        'edu_title', 
        'edu_description', 
        'edu_start', 
        'edu_end',
        ];
}
