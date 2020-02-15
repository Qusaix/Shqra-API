<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(10);

        return view('dashboard.orders.index',compact('orders'));
    }
}
