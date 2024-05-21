<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\orderLine;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders=order::all();
        return view('admin.order.index',compact('orders'));
    }
public function show($id)
{
    $orderLine = OrderLine::findOrFail($id);
    
    return view('admin.order.show', compact('orderLine'));

}


}
