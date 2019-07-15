<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function getPageHobbyFormAdd(){
        return view('dashboard.hobby-add');
    }

    public function getPageHobbyViewAll(){
        return view('dashboard.hobby-all');
    }
}
