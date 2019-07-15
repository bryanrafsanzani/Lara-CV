<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalSkillController extends Controller
{
    public function getPagePersonalSkillFormAdd(){
        return view('dashboard.personal_skill-add');
    }

    public function getPagePersonalSkillViewAll(){
        return view('dashboard.personal_skill-all');
    }
}
