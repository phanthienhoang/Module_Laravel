<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class NewController extends Controller
{
     public function index()
    {
        $tours= Tour::all()->take(4);
        return view("index" ,compact('tours'));
    }
}
