<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Transaction;

class PayInvoiceController extends Controller
{
    //
    public function __construct()
    {
	//$this->middleware('auth');
    }

    //
    public function index(Invoice $invoice)
    {
        if(request()->expectsJson()) {
	    return $invoice;
	}

	return view('pay-invoice.index', compact(['invoice']));
    }

    //
    public function store(Invoice $invoice, Request $request)
    {
	// Validate the form
	$this->validate(request(), [
	    'stripeToken' => 'required',
	]);

	//
	\Stripe\Stripe::setApiKey(\Stripe::getSecretKey());

	// Check the token
	
	// Create teh charge
        $charge = \Stripe\Charge::create(array(
          'amount' => $invoice->total,
          'currency' => 'usd',
          'source' => request('stripeToken'),
          'description' => 'Charge for invoice #' . $invoice->id,
	  'receipt_email' => request('stripeEmail'),
	));

	// Store Transaction
	$transaction = new Transaction();

	$transaction->creator_id = 1;
	$transaction->owner_id = 1;
	$transaction->account_id = 1;
	$transaction->customer_id = $invoice->customer_id;
	$transaction->invoice_id = $invoice->id;
	$transaction->type = 'payment';
	$transaction->reference_number = $charge->source->brand . ' *' . $charge->source->last4;
	$transaction->stripe_id = $charge->id;
	$transaction->total = $invoice->total;

	$transaction->save();
	
	// Update Invoice Status
	$invoice->status = 'paid';
	$invoice->paid_at = \Carbon\Carbon::now();
	$invoice->save();
	
	// Email Receipt

	\Session::flash('message', 'Invoice successfully paid.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($invoice, 201);
	}

	return back();
    }
}
