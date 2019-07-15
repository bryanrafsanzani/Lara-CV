<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    

    public function getPageManageProfile(){
        return view('dashboard.profile-manage');
    }

    public function getPageSettingAccount(){
        return view('dashboard.profile-account');
    }
}
