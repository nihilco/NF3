<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoicesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$invoices = Invoice::all();
	return view('invoices.index', compact('invoices'));
    }

    //
    public function create()
    {
	return view('invoices.create');
    }

    //
    public function show(Invoice $invoice)
    {
	if(request()->expectsJson()) {
            return $invoice;
	}

	return view('invoices.show', compact(['invoice']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [

	]);

        $invoice = new Invoice();

	$invoice->creator_id = auth()->id();
	$invoice->owner_id = auth()->id();

	$invoice->save();

	\Session::flash('message', 'Invoice successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($invoice, 201);
	}

	return redirect('/invoices');
    }

    //
    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', compact(['invoice']));
    }

    //
    public function update(Request $request, Invoice $invoice)
    {
        $this->validate(request(), [

	]);

	//$invoice-> = ;

	$invoice->save();

	\Session::flash('message', 'Invoice successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($invoice, 200);
	}

	return redirect($invoice->path());
    }

    //
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

	\Session::flash('message', 'Invoice successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $invoices = Invoice::all();

	if(request()->expectsJson()) {
            return $invoices;
	}

	return view('invoices.list', compact(['invoices']));
    }
}
