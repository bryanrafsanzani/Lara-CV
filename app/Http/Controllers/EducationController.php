<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function getPageEducationFormAdd (){
        return view('dashboard.education-add');
    }

    public function getPageEducationViewAll(){
        return view('dashboard.education-all');
    }
}
