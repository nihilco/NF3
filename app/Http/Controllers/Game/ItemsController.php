<?php

namespace App\Http\Controllers\Game;

use App\Models\Game\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class ItemsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$items = Item::orderBy('type_id')->orderBy('type_rank')->paginate(25);
	return view('game.items.index', compact('items'));
    }

    //
    public function create()
    {
	$types = Type::where('grouping', Item::class)->get();
	return view('game.items.create', compact(['types']));
    }

    //
    public function show(Item $item)
    {
	//
	if(request()->expectsJson()) {
            return $item;
	}

	return view('game.items.show', compact(['item']));
    }

    //
    public function store(Request $request)
    {
	//
        $this->validate(request(), [
	    'type' => 'required|exists:types,id',
	    'type_rank' => 'required|integer|min:1',
	    'name' => 'required|string',
	    'description' => 'required',
	]);

        $item = new Item();

	$item->creator_id = auth()->id();
	$item->owner_id = auth()->id();
	$item->type_id = request('type');
	$item->type_rank = request('type_rank');
	$item->name = request('name');
	$item->description = request('description');

	$item->save();

	\Session::flash('message', 'Item successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($item, 201);
	}

	return redirect('/game/items');
    }

    //
    public function edit(Item $item)
    {
	$types = Type::where('grouping', Item::class)->get();
        return view('game.items.edit', compact(['item', 'types']));
    }

    //
    public function update(Request $request, Item $item)
    {
        $this->validate(request(), [
	    'type' => 'required|exists:types,id',
	    'type_rank' => 'required|integer|min:1',	    
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$item->type_id = request('type');
	$item->type_rank = request('type_rank');	
	$item->name = request('name');
	$item->description = request('description');

	$item->save();

	\Session::flash('message', 'Item successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($item, 200);
	}

	return redirect($item->path());
    }

    //
    public function destroy(Item $item)
    {
	//
        $item->delete();

	\Session::flash('message', 'Item successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $items = Item::all();

	if(request()->expectsJson()) {
            return $items;
	}

	return view('game.items.list', compact(['items']));
    }
}
