<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    public function index(){
        return view('application');
    }
}
