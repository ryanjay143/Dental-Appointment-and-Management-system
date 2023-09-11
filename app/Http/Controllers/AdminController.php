<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Treatments;
use App\Models\OrderDetails;
use App\Models\ProductDetails;
use App\Models\ServicePayment;
use App\Models\AppointmentModel;
use App\Models\Payment_details;
use App\Models\Payment;
use App\Models\Products;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Tambal;
use App\Models\PersonalInfoModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Cookie;
use RealRashid\SweetAlert\Facades\Alert;
use DateTime;
use App\Models\Schedule;

class AdminController extends Controller
{
    public function updateQuantity(Request $request)
    {
        $productId = $request->input('productId');
        $newQuantity = intval($request->input('newQuantity')); // Ensure newQuantity is converted to an integer
        
        $cart = Cart::find($productId);
        if (!$cart) {
            return response()->json(['error' => 'Cart item not found.']);
        }
        
        $cart->quantity = $newQuantity;
        $cart->save();
        
        return response()->json(['success' => true]);
    }

    public function dashboard()
    {
        $dentistpro = User::where('user_type',2)->get();
        $patients = PersonalInfoModel::count();
        $dentist = User::where('user_type',2)->count();
        $pending = AppointmentModel::where('status',0)->count();
        $appointments = AppointmentModel::with('treatment')->get();
        $treatment = Treatments::with('appointments')->get();
        $appointment = AppointmentModel::whereIn('status', [1,2])->with('user')->get();
        $user = User::with('appointment')->get();
        $order = Order::where('status',0)->get();
        $orderCount = Order::where('status',0)->count();
        return view('admin/dashboard',['dentistpro'=>$dentistpro], compact('appointment','user', 'treatment','appointments','patients','dentist','pending','order','orderCount'));
    } 

    public function orders()
    {
        $order =  DB::table('orders')->where('status', 0)->get();
        return view('admin/orders',compact('order'));
    }
    public function adminViewOrder($id)
    {
          $order = Order::find($id);
          $viewOrder = OrderDetails::where('order_id',$order->id)->get();
          $subtotal = OrderDetails::where('order_id',$order->id)->sum('subTotal');
          return view('admin/adminViewOrder',compact('viewOrder','subtotal'));
    }
    public function changeOrderStatus(Request $request, $id)
    {
          $order = Order::find($id);
          $input = $request->all();
          $order->update($input);
          Alert::success('Confirm Order Successfully');
          return redirect()->back();
    }
    public function appointments()
    {
        return view('admin/appointment');
    }
    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin/profile',compact('adminData'));
    }
    public function dentalpatients()
    {
        $user=auth()->user();
        $date = new DateTime();
        $patient = AppointmentModel::where('select_doctor',$user->id)->get();
        return view('dentist/patient',compact('patient'))->with('date',$date->format("m-d-Y"));
    }
   public function editProfile() 
   {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin/profileEdit',compact('editData'));
   }
   
   public function adminUpdateProfile(Request $request) 
   {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;

        if($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_profile'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        Alert::success('AdminUser Updated Successfully');
        return redirect()->route('admin.profile');
   }
   public function showApp($id)
   {
        $dentist = DB::table('tb_user')->where('user_type', 2)->get();
        $appointment = AppointmentModel::find($id);
        return view('admin/showApp',compact('dentist'))->with('appointment',$appointment);
   }
   public function update(Request $request, $id) 
   {
        $appointment = AppointmentModel::find($id);
        $input = $request->all();
        $appointment->update($input);
        Alert::success('Saved Successfully');
        return redirect()->route('admin.dashboard');
   }

   public function changeStatus(Request $request, $id)
   {
        $orders = OrderDetails::find($id);
        $input = $request->all();
        $orders->update($input);
        Alert::success('Change Status Successfully');
        return redirect()->route('payment');
   }

   public function payment()
   {
        $services = Tambal::where('status',0)->get();
        $payment = DB::table('orders')->where('status', 1)->get();
        return view('admin/payment',compact('payment','services'));
   }

   public function viewOrder($id)
   {
        $order = Order::find($id);
        $viewOrder = OrderDetails::where('order_id',$order->id)->get();
        return view('admin/viewOrder',compact('viewOrder'));
   }

   public function paymentDetails(Request $request, $id)
{
    $order = Order::find($id);

    // Create a new payment record
    $payment = new Payment_details;
    $payment->payment_method = $request->payment_method;
    $payment->patientName = $order->firstname;
    $payment->order_id = $order->id;
    $payment->total_amount = $order->total;
    $payment->amount = $request->amount;
    $payment->status = 2; // Assuming status 2 represents pending payment

    if ($payment->amount < $payment->total_amount) {
        Alert::error('Invalid amount.', 'Amount cannot be less than the total amount.');
        return redirect()->back();
    }

    if ($payment->payment_method === 'cash') {
        // Handle cash payment (no reference input required)
        // Generate receipt and redirect to receipt page

        // Generate the order number
        $orderNumber = time() . rand(1000, 9999);
        $payment->orderNum = $orderNumber;
        $payment->save();

        // Update the order status to paid
        $order->status = 2; // Assuming status 1 represents paid
        $order->save();

        Alert::success('Payment Successful');
        return redirect()->back();
    } elseif ($payment->payment_method === 'gcash') {
        // Handle GCash payment (with reference input required)
        $reference = $request->input('reference');

        if (empty($reference)) {
            Alert::error('Invalid reference.', 'Please provide a reference number for GCash payment.');
            return redirect()->back();
        }

        $orderNumber = time() . rand(1000, 9999);
        $payment->orderNum = $orderNumber;
        $payment->reference = $reference;
        $payment->save();

        // Update the order status to paid
        $order->status = 2; // Assuming status 1 represents paid
        $order->save();

        Alert::success('Payment Successful');
        return redirect()->back();
    } else {
        // Invalid payment method selected
        return redirect()->back()->with('error', 'Invalid payment method selected.');
    }
}


 public function servicePayment(Request $request, $id)
    {
        $service = new ServicePayment;
        $tambal = Tambal::find($id);
        $input = $request->all();
        $service->doctorName = $request->doctorname;
        $service->patientName = $request->patientname;
        $service->services = $request->service;
        $service->total = $request->total;
        $service->moneyAmount = $request->serviceAmount;
        $service->status = $request->status;

        if ($service->moneyAmount < $service->total) {
            Alert::error('Invalid amount.', 'Amount cannot be less than the total amount.');
            return redirect()->back();
        }

        if ($request->paymentService === 'gcash') {
            $reference = $request->input('reference');

            if (empty($reference)) {
                Alert::error('Invalid reference.', 'Please provide a reference number.');
                return redirect()->back();
            }

            $service->payment_id = 2; // Set the payment ID for GCash
            $service->reference = $reference; // Assign the reference number
        } else {
            $service->payment_id = 1; // Set the payment ID for Cash
        }

        // Generate a unique receipt number
        $receiptNum = time() . rand(1000, 9999);
        $service->receiptNum = $receiptNum;

        $service->save();
        $tambal->update($input);

        Alert::success('Payment Successful');
        return redirect()->back();
    }


 
   public function reports()
    {
        
        $services = ServicePayment::all();     
        $reports = Payment_details::all();
        return view('admin/reports',compact('reports','services'));
    }

   public function receipt($id)
   {
     $date = new DateTime();
     $reports = Payment_details::findOrFail($id);
     $orderDetails = OrderDetails::where('order_id',$reports->order_id)->get();
    return view('admin.viewReceipt', compact('reports','orderDetails'))->with('date',$date->format("m-d-Y"));

   }

   public function serviceReceipt($id)
   {
     $receipt = ServicePayment::find($id);
     return view('admin.serviceReceipt',compact('receipt'));
   }

   public function product_details(Request $request)
   {
        $product = new ProductDetails;
        $product->product_id = $request->product_id;
        $product->exp_date = $request->exp_date ;
        $product->qty = $request->qty;
        $product->save();
        Alert::success('Add to Stock Successfully');
        return redirect()->back();
   }
}
