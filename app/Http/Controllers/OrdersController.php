<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function showOrders() {
        $orders = DB::table('orders')->get();
        return view('orders', ['orders' => $orders]);
    }

    public function showOrder($id) {    
        $order = DB::table('orders')->where('id', $id)->first();
        return view('orderPage', ['order' => $order]);
    }


    public function store(Request $request)
    {
        $Order = new Order;
        $Order->user_id = Auth::user()->id;
        $Order->time_create = date('H:i:s');
        $Order->date = date('y-m-d');
        $Order->table = $request->table;
        $Order->save();

        return redirect('/orders');
    }


    public function delete($id_order) {
        DB::table('orders')->where('id', '=', $id_order)->delete();

        return redirect('/orders');
    }
}
