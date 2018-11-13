<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$orders = Order::all();
	return view('orders.index', compact(['orders']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	//
        $this->validate(request(), [
	    'notes' => 'string',
	]);

        $order = new Order();

	$order->creator_id = auth()->id();
	$order->owner_id = auth()->id();
	$order->notes = request('notes');

	$order->save();

	\Session::flash('message', 'Order successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($order, 201);
	}

	return redirect('/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
	//
	if(request()->expectsJson()) {
            return $order;
	}

	return view('orders.show', compact(['order']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
	return view('orders.edit', compact(['order']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $this->validate(request(), [
	    'notes' => 'string',
	]);

	$order->notes = request('notes');

	$order->save();

	\Session::flash('message', 'Order successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($order, 200);
	}

	return redirect($order->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
	//
        $order->delete();

	\Session::flash('message', 'Order successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $orders = Order::all();

	if(request()->expectsJson()) {
            return $orders;
	}

	return view('orders.list', compact(['orders']));
    }
}
