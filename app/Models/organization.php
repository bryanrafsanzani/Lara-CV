<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    protected $table = "organization";
    public $timestamps = false;
    protected $primaryKey = "org_id";


    protected $fillable = [
        'org_id', 
        'org_name',
        'org_title', 
        'org_description', 
        'org_image', 
        'org_start',
        'org_end',
        ];   
}
