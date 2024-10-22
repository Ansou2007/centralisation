<?php

namespace App\Http\Controllers;

use App\Models\Equipements;
use Illuminate\Http\Request;

class EquipementsController extends Controller
{
    public function index(){
        $data = Equipements::all();
        return view('equipement.index',compact('data'));
    }

    public function create(){
        return view('equipement.create');
    }

    public function store(Request $request){

        $equipement = new Equipements();
        $equipement->nom_appareil = strtoupper($request->nom);
        $equipement->url = $request->url;
        $equipement->marque = $request->marque;
        $equipement->model = strtoupper($request->model);
        $equipement->adresse_mac = $request->mac;
        $equipement->type_equipement = $request->type_equipement;
        $equipement->save();
        return to_route('equipement');        
    }

    public function show($id){
        $equipement = Equipements::findOrFail($id);
        return view('equipement.edit',compact('equipement'));
    }

    public function destroy($id){
        $equipement = Equipements::findOrFail($id);
        $equipement->delete();
        return to_route('equipement');
    }
}
