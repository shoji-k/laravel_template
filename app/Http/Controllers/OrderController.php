<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SEC_KEY'));
        // header('Content-Type: application/json');
        $domain = env('DOMAIN');
        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price' => 'price_1JWyiDGgYGBSNtMceyWJMnYm',
                'quantity' => 1,
            ]],
            'payment_method_types' => [
                'card',
            ],
            'mode' => 'payment',
            'success_url' => $domain . '/orders/success',
            'cancel_url' => $domain . '/orders/cancel',
        ]);
        // header("HTTP/1.1 303 See Other");
        // header("Location: " . $checkoutSession->url);
        return redirect($checkoutSession->url, 303);
    }
}
