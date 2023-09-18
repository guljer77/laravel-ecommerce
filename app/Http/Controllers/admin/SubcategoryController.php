<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index(){
        $subcategories = Subcategory::orderBy('id','desc')->get();
        return view('admin.modules.subcategory.allSubcategory',compact('subcategories'));
    }
    public function add(){
        $categories = Category::latest()->get();
        return view('admin.modules.subcategory.addSubcategory',compact('categories'));
    }
    public function store(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:subcategories',
            'category_id' => 'required',
        ]);
        $category_id = $request->category_id;
        $category_name = Category::where('id',$category_id)->value('category_name');
        Subcategory::insert([
            'subcategory_name'=>$request->subcategory_name,
            'slug'=>strtolower(str_replace(' ','-',$request->subcategory_name)),
            'category_id'=>$category_id,
            'category_name'=>$category_name,
        ]);
        Category::where('id',$category_id)->increment('subcategory_count',1);
        return redirect('/admin/all-subcategory')->with('message','Subcategory Added Successfully');
    }
    public function edit($id){
        $subcategory = Subcategory::find($id);
        return view('admin.modules.subcategory.edit',compact('subcategory'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'subcategory_name' => 'required',
        ]);
        Subcategory::find($id)->update([
            'subcategory_name'=>$request->subcategory_name,
            'slug'=>strtolower(str_replace(' ','-',$request->subcategory_name)),
        ]);
        return redirect('/admin/all-subcategory')->with('message','Subcategory Update Successfully');
    }
    public function Delete($id){
        $cat_id = Subcategory::where('id',$id)->value('category_id');
        Subcategory::find($id)->delete();
        Category::where('id',$cat_id)->decrement('subcategory_count',1);
        return redirect('/admin/all-subcategory')->with('message','Subcategory Delete Successfully');
    }
}
