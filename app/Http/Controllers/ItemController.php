<?php // app/Http/Controllers/ItemController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
	// 	$this->validate($request, [
	// 		'name' => 'required',
	// 		'description' => 'required',
	//   ]);

	//   Item::create($request->all());
	//   return redirect()->route('items.index');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->update($request->all());
        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        Item::destroy($id);
        return redirect()->route('items.index');
    }
}
