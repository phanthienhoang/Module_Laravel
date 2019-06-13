<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Organizer;
use App\Information;
use Illuminate\Support\Facades\db;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        $tours= Tour::paginate(8);
        $organizers = Organizer ::all();
        return view("packages" ,compact('tours','organizers'));
    }

    public function create()
    {
        $organizers=Organizer::all();
        return view("create",compact('organizers'));
    }

    public function add(Request $request)
    {   
        $this->validatee();
        $attribute = request()->all();
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $attribute['image'] = $file;
        } else {
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;
            $newFileName = "$fileName.$fileExtension";
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $attribute['image'] = $newFileName;
        }
        $tour = Tour::create($attribute);
        $message = "Tạo mới $request->tourName thành công!";
        Session::flash('create-success',$message);
        return redirect("/index");
    }

    public function edit(Tour $tour)
    {
        $organizers=Organizer::all();
        return view("edit", compact('tour','organizers'));
    }

    public function update(Tour $tour, Request $request)
    {
        $this->validatee();
        
        $organizers = Organizer ::all();
        $tour->tourName = $request->tourName;
        $tour->content = $request->content;
        $tour->departureDay = $request->departureDay;
        $tour->tourName = $request->tourName;
        $tour->content = $request->content;
        $tour->place = $request->place;
        $tour->organizer_id = $request->organizer_id;
        $tour->transport = $request->transport;
        $tour->price = $request->price;
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $tour->image = $file;
        } else {
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;
            $newFileName = "$fileName.$fileExtension";
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $tour->image = $newFileName;
        }
        $tour->save();
        return redirect("/index");
    }

    public function delete($id)
    {
        db::table('tours')->where('id',$id)->delete();
        return redirect("/index");
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if(!$keyword){
            return redirect('/index');
        }
        $tours=Tour::where('TourName','LIKE', '%' .$keyword. '%')->
                    orwhere('price','LIKE', '%' .$keyword. '%')->paginate(8);
        $organizers=Organizer::all();
        return view('packages',compact('tours','organizers'));
    }

    public function settour(Tour $tour)
    {
        return view('settour',compact('tour'));
    }
    public function addtour(Request $request)
    {
        $attribute = request()->all();
        $informations = Information::create($attribute);
        return redirect('/index');
    }
    
    public function validatee()
    {
        return request()->validate([
            'tourName' => 'required |min:3 |max:255',
            'content' => 'required |min:3 |max:255',
            'price' => 'required |min:3 |max:255',
        ]); 
    }
}
