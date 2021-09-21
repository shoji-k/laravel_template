<?php

namespace App\Http\Controllers\api;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::query()->select(['id', 'name'])->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(CustomerRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->json('name');
        // $request->validate([
        //     'todo' => 'required|string'
        // ]);
        $customer->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

    }
}
