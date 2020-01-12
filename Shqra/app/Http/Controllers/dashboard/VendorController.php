<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = User::role('company')->paginate(10);
        
        return view('dashboard.vendor.index',compact('vendors'));
    }
}
