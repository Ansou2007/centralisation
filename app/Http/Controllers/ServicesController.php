<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){

        $data = Services::all();
        return view('services.index',compact('data'));
    }

    public function create(){
        return view('services.create');
    }

    public function store(Request $request){
        
        $service = new Services();
        $service->type_service = $request->type_service;
        $service->nom = $request->nom;
        $service->url = $request->url;
        $service->save();
        return to_route('service');

    }


    public function show($id){
        $service = Services::findOrFail($id);
        return view('services.edit',compact('service'));
    }

    public function destroy($id){
        $service = Services::findOrFail($id);
        $service->delete();
        return to_route('service');
    }
}
