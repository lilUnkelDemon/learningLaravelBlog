<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return "HI";
    }
    public function fucku(){
        return view('admin.home');
    }
}
