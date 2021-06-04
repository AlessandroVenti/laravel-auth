<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Pilot;
use App\Brand;

class CarController extends Controller
{
    public function home2Function() {
        $cars = Car::all();
        return view('pages.home2', compact('cars'));
    }

    public function pilotFunction($id) {
        $pilot = Pilot::findOrFail($id);
        return view('pages.pilot', compact('pilot'));
    }

    public function brandFunction($id){
        $brand = Brand::findOrFail($id);
        return view('pages.brand', compact('brand'));
    }

    public function createFunction() {
        $brands = Brand::all();
        return view('pages.create', compact('brands'));
    }

    public function storeFunction(Request $request) {
        $validated = $request -> validate([
            'name' => 'required|string',
            'model' => 'required|string',
            'kW' => 'required|integer',
            'brand_id' => 'required|integer'
        ]);

        $brand = Brand::findOrFail($request -> get('brand_id'));
        $car = Car::make($validated);
        $car->brand()->associate($brand);
        $car->save();
        return redirect()->route('home2');
    }

    public function editFunction($id) {
        $car = Car::findOrFail($id);
        $brands = Brand::all();
        $pilots = Pilot::all();
        return view('pages.edit', compact('car', 'brands', 'pilots'));
    }

    public function updateFunction(Request $request, $id) {
        $validated = $request -> validate([
            'name' => 'required|string',
            'model' => 'required|string',
            'kW' => 'required|integer',
        ]);
        $car = Car::findOrFail($id);
        $car->update($validated);
        $car->brand()->associate($request -> brand_id);
        $car->save();
        $car->pilots()->sync($request->pilots_id);
        return redirect()->route('home2', $car -> id);
    }
}
