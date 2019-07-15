<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function getPageExperienceFormAdd(){
        return view('dashboard.experience-add');
    }

    public function getPageExperienceViewAll(){
        return view('dashboard.experience-all');
    }
}
