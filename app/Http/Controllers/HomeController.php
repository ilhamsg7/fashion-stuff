<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Http\Requests\CartRequest;

class HomeController extends Controller {

    public function redirect() {
        if(Auth::user()->usertype == '1') {
            return view('admin.home');
        } else {
            $data = Product::paginate(3);
            $count = Cart::where('phone', auth()->user()->phone)->count();
            return view('user.home', compact('data', 'count'));
        }
    }

    public function index() {
        if(Auth::id()) {
            return redirect('redirect');
        } else {
            $data = Product::paginate(3);
            return view('user.home', [
                'data' => $data,
                'title' => 'Home'
            ]);
        }
    }

    public function search(Request $request) {
        $search = $request->search;
        if($search == '') {
            $data = Product::paginate(3);
            return view('user.home', compact('data'));
        }
        $data = Product::where('title', 'Like', '%'.$search.'%')->get();
        return view('user.home', compact('data'));
    }

    public function allproduct() {
        $data = Product::all();
        return view('user.allproduct', [
            'data' => $data,
            'title' => 'Product'
        ]);
    }

    public function addcart(CartRequest $request, $id) {
        if(Auth::id()) {
            $quantity = $request->validated();
            $user = auth()->user();
            $product = Product::find($id);
            $dataInput = [ $user, $product, $quantity ];
            $cart = Cart::create($dataInput);
            return redirect()->back()->with('message', 'Product Added to Cart');

        } else {
            return redirect('login');
        }
    }

    public function showcart() {
        $user = auth()->user();
        $cart = Cart::where('phone', $user->phone)->get();
        $count = Cart::where('phone',$user->phone)->count();
        return view('user.showcart', compact('count', 'cart'));
    }

    public function deletecart($id) {
        $data = Cart::destroy($id);
        return redirect()->back()->with('message', 'Product Removed Successfully');
    }

    public function confirmorder(Request $request) {
        $user = auth()->user();
        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach($request->productname as $key=>$productname) {
            $order = new Order;

            $order->product_name=$request->productname[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];
            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;

            $order->status='not delivered';

            $order->save();
        }
        DB::table('carts')->where('phone', $phone)->delete();
        return redirect()->back()->with('message', 'Product Ordered');
    }
}
