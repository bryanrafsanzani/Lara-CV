<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class active extends Model
{
    protected $table = "active";
    public $timestamps = false;
    protected $primaryKey = "id";


    protected $fillable = [
        'id', 
        'prs_name',
        'login_id' ,
        ];  
        
   

}
