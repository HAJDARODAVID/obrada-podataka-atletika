<?php

namespace App\Http\Controllers;

use App\Models\TypeCategoryModel;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index(){
        return view('discipline');
    }
}
