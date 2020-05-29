<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Remise;
use App\Diplome;
use App\Retrait;

class RetraitController extends Controller
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
       return view('retraits.create',['diplomes'=>$diplomes]);
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
          

            
        $retrait = new Retrait();
        $retrait->dateretrait = $request->input('dateretrait');
        $retrait->situationretrait = $request->input('situationretrait');
        
        $retrait->demande_id=$demande->id;
       

        $retrait->save();

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
        return view('retrait.show', [
            'demande' => Demande::find($id) ]);

        }

     public function edit($retrait,$demande){
       
            $retrait = Retrait::find($retrait)->first();
    
            return view('retrait.edit',[
                
                'retrait'=> $retrait
            ]);
        }
    
    public function update( Request $request, $retrait, $demande){
         
    
            $demande = Demande::findOrFail($demande)->first();
            $demande->Nom = $request->input('Nom');
            $demande->Prénom = $request->input('Prénom');
            $demande->CNE = $request->input('CNE');
            $demande->Apogée = $request->input('Apogée');
            //$demande->diplome_id = $request->input('diplome_id');
            $demande->Année_scolarité= $request->input('Année_scolarité');
    
            $demande->save();
       
            $retrait = Retrait::findOrFail($retrait)->first();
            $retrait->dateretrait = $request->input('dateretrait');
            $retrait->situationretrait = $request->input('situationretrait');
            $retrait->demande_id=$demande->id;
    
            $retrait->save();
    
    
            return redirect()->back();
            
        }
    
    public function destroy(Request $request, $retrait, $demande){
    
         
    
            $demande = Demande::findOrFail($demande)->first();
    
            $demande->delete();
    
    
            return redirect()->back();
            
        }
    
    
    }

