<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getHome() {
        return view('website.pages.demo');
    }
}