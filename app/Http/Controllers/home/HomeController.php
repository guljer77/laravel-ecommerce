<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function cart(){
        $user_id = Auth::id();
        $cart_item = Cart::where('user_id',$user_id)->orderBy('id','desc')->get();
        return view('website.modules.addtocart',compact('cart_item'));
    }
    public function profile(){
        return view('website.modules.profile');
    }
    public function pending(){
        return view('website.modules.pending');
    }
    public function history(){
        return view('website.modules.history');
    }
    public function product(Request $request){
        $product_price= $request->price;
        $quantity= $request->quantity;
        $price = $product_price * $quantity;
        Cart::insert([
            'product_id'=>$request->product_id,
            'user_id'=>Auth::id(),
            'quantity'=>$request->quantity,
            'price'=>$price
        ]);
        return redirect('/e-mart/add-to-cart')->with('message','Order item Add to cart Successfully');
    }
}
