<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //query all inventories from the table 'inventories' using model
        $inventories = Inventory::latest()->get(); //Collection of Inventory objects
        //return to view with $inventories (resources/view/inventories/index.blade.php)
        return view('inventories.index', compact('inventories'));
    }

    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request)
    {
        // store in the table 'inventories' using model
        //POPO - Plain Old PHP Object
        $inventory = new Inventory();
        $inventory->name = $request->name;
        $inventory->quantity = $request->quantity;
        $inventory->price = $request->price;
        $inventory->serial_no = $request->serial_no;
        $inventory->user_id = auth()->user()->id; // Assuming user is authenticated
        $inventory->save();

        //return to inventory index
        return redirect('/inventories');
    }

    public function show(Inventory $inventory) //Model Binding for inventory
    {
        return view('inventories.show', compact('inventory'));
    }

    public function edit(Inventory $inventory) //Model Binding for inventory
    {
        return view('inventories.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory) //Model Binding for inventory
    {
        //update using model
        $inventory->name = $request->name;
        $inventory->quantity = $request->quantity;
        $inventory->price = $request->price;
        $inventory->serial_no = $request->serial_no;
        $inventory->save();

        //return to inventory index
        return redirect('/inventories');
    }

    public function destroy(Inventory $inventory)
    {
        // delete using model
        $inventory->delete();

        // return to inventory index
        return redirect('/inventories');
    }
}
