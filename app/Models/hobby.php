<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hobby extends Model
{
    protected $table = "hobby";
    public $timestamps = false;
    protected $primaryKey = "id";


    protected $fillable = [
        'id', 
        'hby_name',
        'hby_image', 
        'login_id',
        ];   

}
