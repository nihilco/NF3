<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceItem;

class InvoiceItemsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$invoiceItems = InvoiceItem::all();
	return view('invoice-items.index', compact('invoiceItems'));
    }

    //
    public function create()
    {
	return view('invoice-item.create');
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [

	]);

        $invoiceItem = new InvoiceItem();

	$invoiceItem->creator_id = auth()->id();
	$invoiceItem->owner_id = auth()->id();

	$invoiceItem->save();

	\Session::flash('message', 'Invoice Item successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($invoiceItem, 201);
	}

	return redirect('/invoice-items');
    }

    //
    public function edit(InvoiceItem $invoiceItem)
    {
        return view('invoice-items.edit', compact(['invoiceItem']));
    }

    //
    public function update(Request $request, InvoiceItem $invoiceItem)
    {
        $this->validate(request(), [

	]);

	//

	$invoiceItem->save();

	\Session::flash('message', 'InvoiceItem successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($invoiceItem, 200);
	}

	return redirect($invoiceItem->invoice->path());
    }

    //
    public function destroy(InvoiceItem $invoiceItem)
    {
        $invoiceItem->delete();

	\Session::flash('message', 'Invoice Item successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }
}
