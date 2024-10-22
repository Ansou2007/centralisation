<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function index(){
        $data = Applications::all();
        return view('application.index',compact('data'));
    }

    public function create(){
        return view('application.create');
    }

    public function store(Request $request){

        $application = new Applications();
        $application->nom = $request->nom;
        $application->url = $request->url;
        $application->save();
        return to_route('application');
    }

    public function show($id){
        $application = Applications::findOrFail($id);
        return view('application.edit',compact('application'));
    }

    public function destroy($id){
        $application = Applications::findOrFail($id);
        $application->delete();
        return to_route('application');
    }
}
