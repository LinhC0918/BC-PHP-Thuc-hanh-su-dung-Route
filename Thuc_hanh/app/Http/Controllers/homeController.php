<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use test\Http\Requests;

class homeController extends Controller
{
    public function index() {
        return view('home');
    }
}
