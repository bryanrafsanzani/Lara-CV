<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function getPageOrganizationFormAdd(){
        return view('dashboard.organization-add');
    }

    public function getPageOrganizationViewAll(){
        return view('dashboard.organization-all');
    }
}
