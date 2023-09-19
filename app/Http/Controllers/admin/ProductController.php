<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->get();
        return view('admin.modules.product.allproduct',compact('products'));
    }
    public function add(){
        $categories = Category::all();
        $subcategories = Subcategory::orderBy('id','desc')->get();
        return view('admin.modules.product.addproduct',compact('categories','subcategories'));
    }
    public function store(Request $request){
        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
            'product_category_id' => 'required',
            'product_subcategory_id' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('product_image');
        $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->product_image->move(public_path('upload'),$imageName);
        $img_url = 'upload/' . $imageName;

        $category_id = $request->product_category_id;
        $subcategory_id = $request->product_subcategory_id;
        $category_name = Category::where('id',$category_id)->value('category_name');
        $subcategory_name = Subcategory::where('id',$subcategory_id)->value('subcategory_name');

        Product::insert([
            'product_name'=>$request->product_name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'product_short_des'=>$request->product_short_des,
            'product_long_des'=>$request->product_long_des,
            'product_category_name'=>$category_name,
            'product_subcategory_name'=>$subcategory_name,
            'product_category_id'=>$request->product_category_id,
            'product_subcategory_id'=>$request->product_subcategory_id,
            'product_image'=>$img_url,
            'slug'=>strtolower(str_replace(' ','-',$request->product_name)),
        ]);

        Category::where('id',$category_id)->increment('product_count',1);
        Subcategory::where('id', $subcategory_id)->increment('product_count',1);
        return redirect('/admin/all-product')->with('message','Product Added Successfully');
    }
    public function edit($id){
        return view('admin.modules.product.edit');
    }
}
