<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function buyforma()
    {
        return view('buyforma');
    }

    public function storeOrderForm(Request $request)
    {
        $request->validate([
            'bookName' => 'required',
            'fullName' => 'required',
            'emailForm' => 'required|email',
            'address' => 'required',
            'telephone' => 'required',
            'count' => 'required',
            'zipCode' => 'required',
        ]);

        $input = $request->all();

        Order::create($input);


        return redirect()->back()->with(['success' => 'Order Form Submit Successfully']);
    }
}
