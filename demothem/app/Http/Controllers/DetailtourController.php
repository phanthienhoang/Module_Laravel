<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detailtour;

class DetailtourController extends Controller
{
    public function index()
    {
        $detailtours = Detailtour::all();
        return view('details', compact('detailtours'));
    }
}
