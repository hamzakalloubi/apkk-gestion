<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Retrait;
use App\Remise;
use App\Diplome;

class DemandeController extends Controller
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
       return view('demandes.create',['diplomes'=>$diplomes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'Nom' => 'required',
            'Prénom' => 'required',
            'CNE' => 'required',
            'Apogée' => 'required',
            'Année_scolarité' => 'required'
            

        ]);

        
        $demande = new Demande();
        $demande->Nom = $request->input('Nom');
        $demande->Prénom = $request->input('Prénom');
        $demande->CNE = $request->input('CNE');
        $demande->Apogée = $request->input('Apogée');
        //$demande->diplome_id = $request->input('diplome_id');
        $demande->Année_scolarité = $request->input('Année_scolarité');
      
        
            $demande->save();
    

        $retrait = new Retrait();
        $retrait->Type_retrait = $request->input('Type_retrait');
        $retrait->dateretour = $request->input('dateretour');
        $retrait->dateretrait = $request->input('dateretrait');
        $retrait->situationretrait = $request->input('situationretrait');
        $retrait->demande_id=$demande->id;
       

        $retrait->save();

        return redirect()->back();  


    }
    public function edit($retrait,$demande){
       
        $retrait = Retrait::find($retrait)->first();
        dd($retrait);

        return view('retraits.edit',[
            
            'retrait'=> $retrait
        ]);
    }


    public function valid($demande){
 
        $demande = Demande::where('id','=',$demande)->first();
 
         $demande->situation = "validée";
         $demande->save();
         return redirect()->back();
     }
     
     public function refuse($demande){
  
         $demande = Demande::where('id','=',$demande)->first();
 
         $demande->situation = "refusée";
         $demande->save();
         return redirect()->back();
 
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
