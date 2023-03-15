<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use App\Models\Worder;
use App\Models\Wordermeta;
use App\Models\Worderlookup;

class WooCommerceController extends Controller
{
    public function webhoook(Request $request){
        Log::info('WooCommerce webhook received: '.json_encode($request->all()));
    }

    public function order(){
        $orders = Worder::all();
        $ordersMeta = Wordermeta::all();
        $ordersLookup = Worderlookup::all();

        return Inertia::render('Welcome', [
            'orders' => $orders,
            'ordersMeta' => $ordersMeta,
            'ordersLookup' => $ordersLookup,
        ]);
    }
}
