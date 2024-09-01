<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getHome(){
        return view('website.pages.Home');
    }
    public function getFashion(){
        return view('website.pages.Fashion');
    }
    public function getElectronic(){
        return view('website.pages.Electronic');
    }
    public function getJewllery(){
        return view('website.pages.Jewllery');
    }
}
