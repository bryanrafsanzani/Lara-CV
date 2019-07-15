<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getPagePortfolioFormAdd(){
        return view('dashboard.portfolio-add');
    }

    public function getPagePortfolioViewAll(){
        return view('dashboard.portfolio-all');
    }
}
