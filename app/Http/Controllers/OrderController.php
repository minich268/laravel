<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
u

class OrderController extends Controller
{
    public function postIndex(){
      $order = new Order;
      $order->order_date = $request->order_date;
      $order->order_time = $request->hour;
      unset($request['order_date']);
      unset($request['hour']);
      $order->body = serialize($request->all());
      $order->name = $request->name;
      $order->email = $request->email;
      $order->phone = $request->phone;
      $order->save();

      return redirect('/home')
       }
}
