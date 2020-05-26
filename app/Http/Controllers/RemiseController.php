<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Remise;
use App\Diplome;

class RemiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diplomes = Diplome::all();
       return view('remises.create',['diplomes'=>$diplomes]);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demande = new Demande();
        $demande->Nom = $request->input('Nom');
        $demande->Prénom = $request->input('Prénom');
        $demande->CNE = $request->input('CNE');
        $demande->Apogée = $request->input('Apogée');
        //$demande->diplome_id = $request->input('diplome_id');
        $demande->Année_scolarité = $request->input('Année_scolarité');
        
        
        
            $demande->save();
          

            
        $remise = new Remise();
        $remise->dateremise = $request->input('dateremise');
        $remise->situationremise = $request->input('situationremise');
        $remise->demande_id=$demande->id;
       

        $remise->save();

        return redirect()->back();  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('remises.show', [
            'demande' => Demande::find($id) ]);

        
    
    }

}