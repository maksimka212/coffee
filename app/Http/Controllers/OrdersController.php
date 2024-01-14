<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function showOrders() {
        $orders = DB::table('orders')->get();
        return view('orders', ['orders' => $orders]);
    }

    public function showOrder($id) {    
        $orders = DB::table('orders')->get();
        return view('orderPage', ['order' => $orders[$id-1]]);
    }

    public function store($user_id, $table) {    
        DB::table('orders')->insert([
            'date' =>  date('y-m-d'),
            'status' => 'Создан',
            'time_create' => date('H:i:s'),
            'user_id' => $user_id,
            'table' => $table
        ]);
        
        OrdersController::showOrders();
    }
}
