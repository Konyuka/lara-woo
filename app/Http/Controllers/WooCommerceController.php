<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WooCommerceController extends Controller
{
    public function webhoook(Request $request){
        // return dd($request);
        Log::info('WooCommerce webhook received: '.json_encode($request->all()));
    }
}
