<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class TourController extends Controller
{
    public function index()
    {   
        $tour=Tour::all();
        return response()->json($tour);
    }
    public function show(Tour $tour)
    {
        return response()->json($tour);
    }

    public function store(Request $tour)
    {
        $tour = Tour::create($request->all());

        return response()->json($tour, 201);
    }

    public function update(Request $request, Tour $tour)
    {
        $tour->update($request->all());

        return response()->json($tour, 200);
    }

    public function delete(Tour $tour)
    {
        $tour->delete();

        return response()->json(null, 204);
    }
}
