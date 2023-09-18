<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index(){
        return view('admin.modules.subcategory.allSubcategory');
    }
    public function add(){
        return view('admin.modules.subcategory.addSubcategory');
    }
}
