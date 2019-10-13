<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $table = "education";
    public $timestamps = false;
    protected $primaryKey = "id";


    protected $fillable = [
        'id', 
        'edu_name',
        'edu_title', 
        'edu_description', 
        'edu_start', 
        'edu_end',
        'login_id',
        ];
}
