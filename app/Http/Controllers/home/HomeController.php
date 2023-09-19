<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->paginate(8);
        return view('website.modules.index',compact('products'));
    }
    public function category($id){
        $category = Category::find($id);
        $products = Product::where('product_category_id',$id)->orderBy('id','desc')->get();
        return view('website.modules.category',compact('category','products'));
    }
    public function details($id){
        $product = Product::find($id);
        $subcat_id = Product::where('id',$id)->value('product_subcategory_id');
        $relateds = Product::where('product_subcategory_id',$subcat_id)->orderBy('id','desc')->get();
        return view('website.modules.details',compact('product','relateds'));
    }
}
