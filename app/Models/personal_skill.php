<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personal_skill extends Model
{
    protected $table = "personal_skill";
    public $timestamps = false;
    protected $primaryKey = "prs_id";
    


    protected $fillable = [
        'prs_id', 
        'prs_name',
        'prs_rate', 
        ];           
}
