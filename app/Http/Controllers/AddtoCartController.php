<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\PersonalInfoModel;
use App\Models\Order_list;
use App\Models\Products;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\ProductDetails;
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
            $order=new Order_list;

            $order->product_name=$request->productname[$key];
            $order->product_image=$request->image[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];
            $order->firstname=$firstname;
            $order->email=$email;
            $order->phone_number=$phone_number;
            $order->save();
        }
       
        return redirect()->route('confirm.order');
    }

    public function confirm() 
    {
        $user = auth()->user();
        $viewOrder = order_list::where('firstname',$user->firstname)->where('status',[0])->get();
        $order = order_list::where('firstname',$user->firstname)->where('status',[0])->count();
        $cart = cart::where('firstname',$user->firstname)->count();

       
        DB::table('order_lists')->where('firstname',$user->firstname)->delete();
        return view('userpage/checkout',compact('cart','order','viewOrder'));
    }
    public function cancelOrder()
    {
        $user = auth()->user();
        DB::table('order_lists')->where('firstname',$user->firstname)->where('status',[0])->delete();
        Alert::success('Cancel Order Successfully');
        return redirect()->route('home');
    } 
    
    public function orderdetails(Request $request)
    {
        // Retrieve user information
        $user = auth()->user();
        $firstname = $user->firstname;
        $email = $user->email;
        $phone_number = $user->phone_number;
    
        // Create a new order
        $order = new Order;
        $order->firstname = $firstname;
        $order->email = $email;
        $order->phone_number = $phone_number;
        $order->total = $request->total;
        $order->save();
    
        // Iterate over the products in the request and create order details
        foreach ((array)$request->productname as $key => $productname) {
            // Reduce the stock quantity using FIFO logic
            $product = Products::where('name', $productname)->first();
            $quantityToDeduct = $request->quantity[$key];
            $oldestDetails = ProductDetails::where('product_id', $product->id)
                ->orderBy('exp_date', 'asc')
                ->take($quantityToDeduct)
                ->get();
    
            foreach ($oldestDetails as $detail) {
                $quantity = $detail->qty;
    
                if ($quantityToDeduct > $quantity) {
                    // If the available quantity is less than the quantity to deduct,
                    // deduct the available quantity and delete the detail
                    $quantityToDeduct -= $quantity;
                    // $detail->delete();
                } else {
                    // If the available quantity is equal to or greater than the quantity to deduct,
                    // deduct the quantity from the current detail and break the loop
                    
                    $detail->qty -= $quantityToDeduct;
                    $detail->save();
                    break;
                }
            }
    
            // Create order details
            $orderdetails = new OrderDetails;
            $orderdetails->order_id = $order->id;
            $orderdetails->product_name = $request->productname[$key];
            $orderdetails->product_image = $request->image[$key];
            $orderdetails->quantity = $request->quantity[$key];
            $orderdetails->subTotal = $request->subtotal[$key];
            $orderdetails->save();
        }
    
        // Delete the user's cart entries
        DB::table('carts')->where('firstname', $user->firstname)->delete();
    
        // Show a success message and redirect to the appointment table
        Alert::success('Order Successfully');
        return redirect()->route('appointmentTable');
    }
    
    

    
}
