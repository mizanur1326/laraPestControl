<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Price;
use App\Models\backend\Service;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function packeges()
    {
        $data['packeges'] = Price::all();
        return view('frontend.packege', $data);
    }

    public function services()
    {
        $data['services'] = Service::all();
        return view('frontend.services', $data);
    }


    // CART Start

        /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $packeges = Price::all();
        return view('packeges', compact('packeges'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('frontend.cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $price = Price::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $price->name,
                "quantity" => 1,
                "price" => $price->price,
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function checkout(Request $request){

        // $data = $request->session()->all();

        return view('frontend.checkout');

    }

    public function order(Request $request){
        
        $order = new Order();
         $order_data = $request->all();
         $order_data['order_number'] = "ORD" . " " . rand(5, 5000);
        //  $order_data['quantity'] = 1;
         $order_data['country'] = "Bangladesh";
        //  print_r($order_data) ; 
        $order->create($order_data);
        $request->session()->forget('cart');

         
        //  print_r(session('cart'));

        //  dd($order_data);
        return redirect('packege')->with('msg', 'Order Successfully Placed. Thank You for Order');


        //  $carts = session('cart');
        //  print_r($carts) ; 
        //  $order_data['coupon'] = '100';
        //  $order_data['shipping_id'] = '15';
        //  $order->fill($order_data);
     }

     public function myOrder(){
        // $orders = Order::all();
        $customer_id = Auth::guard('customer')->user()->id;
        // $product = Order::where('student_id', $student_id)->get();
        $orders = Order::where('customer_id', $customer_id)->get();
        // ->where('status', 0)
        
        return view( 'frontend.myorders', compact('orders') );
     }


}
