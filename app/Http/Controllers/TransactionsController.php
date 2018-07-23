<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Transaction;

class TransactionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$transactions = Transaction::all();
	return view('transactions.index', compact('transactions'));
    }

    //
    public function create()
    {
	$accounts = Account::all();
	$customers = Customer::all();
	$invoices = Invoice::all();
	
	return view('transactions.create', compact(['accounts', 'customers', 'invoices']));
    }

    //
    public function show(Transaction $transaction)
    {
	if(request()->expectsJson()) {
            return $transaction;
	}

	return view('transactions.show', compact(['transaction']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	    'account' => 'required|exists:accounts,id',
	    'customer' => 'required|exists:customers,id',
	    'invoice' => 'required|exists:invoices,id',
	    'total' => 'required|regex:/^\d*(\.\d{1,2})?$/',
	    'type' => 'required|in:donation,payment,refund',
	    'notes' => 'nullable|string',
	]);

        $transaction = new Transaction();

	$transaction->creator_id = auth()->id();
	$transaction->owner_id = auth()->id();
	$transaction->account_id = request('account');
	$transaction->customer_id = request('customer');
	$transaction->invoice_id = request('invoice');
	$transaction->type = request('type');
	$transaction->total = request('total')*100;
	if(request('notes') && request('notes') != '') {
	    $transaction->notes = request('notes');
	}

	$transaction->save();

	\Session::flash('message', 'Transaction successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($transaction, 201);
	}

	return redirect('/transactions');
    }

    //
    public function edit(Transaction $transaction)
    {
	$accounts = Account::all();
	$customers = Customer::all();
	$invoices = Invoice::all();
	
        return view('transactions.edit', compact(['transaction', 'accounts', 'customers', 'invoices']));
    }

    //
    public function update(Request $request, Transaction $transaction)
    {
        $this->validate(request(), [
	    'account' => 'required|exists:accounts,id',
	    'customer' => 'required|exists:customers,id',
	    'invoice' => 'required|exists:invoices,id',
	    'total' => 'required|regex:/^\d*(\.\d{1,2})?$/',
	    'type' => 'required|in:donation,payment,refund',
	    'notes' => 'nullable|string',
	]);

	$transaction->account_id = request('account');
	$transaction->customer_id = request('customer');
	$transaction->invoice_id = request('invoice');
	$transaction->type = request('type');
	$transaction->total = request('total')*100;
	$transaction->notes = request('notes');

	$transaction->save();

	\Session::flash('message', 'Transaction successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($transaction, 200);
	}

	return redirect($transaction->path());
    }

    //
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

	\Session::flash('message', 'Transaction successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $transactions = Transaction::all();

	if(request()->expectsJson()) {
            return $transactions;
	}

	return view('transactions.list', compact(['transactions']));
    }
}
