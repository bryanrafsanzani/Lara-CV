<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hobby extends Model
{
    protected $table = "hobby";
    public $timestamps = false;
    protected $primaryKey = "hby_id";


    protected $fillable = [
        'hby_id', 
        'hby_name',
        'hby_image', 
        ];   

}
