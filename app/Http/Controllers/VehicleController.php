<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //query all vehicles from the table 'vehicles' using model
        $vehicles = Vehicle::latest()->get(); //Collection of Vehicle objects
        //return to view with $vehicles (resources/view/vehicles/index.blade.php)
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        // store in the table 'vehicles' using model
        //POPO - Plain Old PHP Object
        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->model = $request->model;
        $vehicle->brand = $request->brand;
        $vehicle->color = $request->color;
        $vehicle->license_plate = $request->license_plate;
        $vehicle->user_id = auth()->user()->id; // Assuming user is authenticated
        $vehicle->save();

        //return to vehicle index
        return redirect('/vehicles');
    }

    public function show(Vehicle $vehicle) //Model Binding for vehicle
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle) //Model Binding for vehicle
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle) //Model Binding for vehicle
    {
        //update using model
        $vehicle->name = $request->name;
        $vehicle->model = $request->model;
        $vehicle->brand = $request->brand;
        $vehicle->color = $request->color;
        $vehicle->license_plate = $request->license_plate;
        $vehicle->save();

        //return to vehicle index
        return redirect('/vehicles');
    }
    
    public function destroy(Vehicle $vehicle) //Model Binding for vehicle
    {
        //delete using model
        $vehicle->delete();

        //return to vehicle index
        return redirect('/vehicles');
    }

}
