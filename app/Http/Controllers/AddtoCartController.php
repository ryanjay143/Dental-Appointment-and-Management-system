<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\PersonalInfoModel;
use App\Models\Products;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class AddtoCartController extends Controller
{
    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();

            $product = Products::find($id);

            $cart = new cart;

            $cart->firstname = $user->firstname;
            $cart->lastname = $user->lastname;
            $cart->email = $user->email;
            $cart->phone_number = $user->phone_number;
            $cart->product_title = $product->name;
            $cart->product_image = $product->image;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;

            $cart->save();
            Alert::success('Add to Cart Successfully');
            return redirect()->route('userProducts');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function checkout(Request $request)
    {
        $user = auth()->user();
        $firstname=$user->firstname;
        $email=$user->email;
        $phone_number=$user->phone_number;

        foreach((array)$request->productname as $key=>$productname)
        {
            $order=new order;

            $order->product_name=$request->productname[$key];
            $order->product_image=$request->image[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];
            $order->firstname=$firstname;
            $order->email=$email;
            $order->phone_number=$phone_number;
            $order->save();
        }
        // DB::table('carts')->where('firstname',$firstname)->delete();
        return redirect()->back();
    }

    public function confirm() 
    {
        $user = auth()->user();
        $viewOrder = order::where('firstname',$user->firstname)->where('status',[0])->get();
        $order = order::where('firstname',$user->firstname)->where('status',[0])->count();
        $cart = cart::where('firstname',$user->firstname)->count();
        return view('userpage/checkout',compact('cart','order','viewOrder'));
    }
    public function cancelOrder()
    {
        $user = auth()->user();
        DB::table('orders')->where('firstname',$user->firstname)->where('status',[0])->delete();
        Alert::success('Cancel Order Successfully');
        return redirect()->route('home');
    } 
    
    public function orderdetails(Request $request)
    {
        $user = auth()->user();
        $firstname = $user->firstname;

        foreach((array)$request->productname as $key=>$productname)
        {
            $orderdetails = new OrderDetails;
            $orderdetails->firstname = $firstname;
            $orderdetails->product_name = $request->productname[$key];
            $orderdetails->product_image = $request->image[$key];
            $orderdetails->quantity = $request->quantity[$key];
            $orderdetails->product_name = $request->productname[$key];
            $orderdetails->subTotal = $request->subtotal[$key];
            $orderdetails->save();
        }
        DB::table('orders')->where('firstname',$user->firstname)->where('status',[0])->delete();
        Alert::success('Confirm Order Successfully');
        return redirect()->route('home');
    }
}
