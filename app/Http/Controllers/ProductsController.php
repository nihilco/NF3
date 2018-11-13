<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
	    
class ProductsController extends Controller
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
	$products = Product::all();
	return view('products.index', compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('products.create');
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
	    'name' => 'required|string',
	    'slug' => 'required|string|unique:products,slug',	    
	    'description' => 'required',
	    'cost' => 'nullable|integer',
	    'price' => 'required|integer',	    
	]);

        $product = new Product();

	$product->creator_id = auth()->id();
	$product->owner_id = auth()->id();
	$product->name = request('name');
	$product->slug = request('slug');	
	$product->description = request('description');
	if(request('cost') != 0) {
	    $product->cost = request('cost');
	}
	$product->price = request('price');	

	$product->save();

	\Session::flash('message', 'Product successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($product, 201);
	}

	return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
	//
	if(request()->expectsJson()) {
            return $product;
	}

	return view('products.show', compact(['product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
	return view('products.edit', compact(['product']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
	//
        $this->validate(request(), [
	    'name' => 'required|string',
	    'slug' => [
	        'required',
		'string',
		Rule::unique('products')->ignore($product->id),
	    ],
	    'description' => 'required',
	    'cost' => 'nullable|integer',
	    'price' => 'required|integer',	    
	]);

	$product->name = request('name');
	$product->slug = request('slug');	
	$product->description = request('description');
	$product->cost = request('cost');
	$product->price = request('price');
	
	$product->save();

	\Session::flash('message', 'Product successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($product, 200);
	}

	return redirect($product->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

	\Session::flash('message', 'Product successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();	
    }

    //
    public function list()
    {
        $products = Product::all();

	if(request()->expectsJson()) {
            return $products;
	}

	return view('products.list', compact(['products']));
    }
}
