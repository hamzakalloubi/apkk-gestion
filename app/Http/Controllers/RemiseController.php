<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\MAil;
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
        $demande->diplome = $request->input('diplome');
        //$demande->diplome_id = $request->input('diplome_id');
        $demande->Année_scolarité = $request->input('Année_scolarité');
        
        
        
            $demande->save();
          

            
        $remise = new Remise();
        $remise->dateremise = $request->input('dateremise');
        $remise->situationremise = $request->input('situationremise');
        $remise->demande_id=$demande->id;
       

        $remise->save();

        session()->flash('success', 'La demande est bien enregistrée');

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
    public function edit($remise,$demande){
       
        $remise = Remise::where('id','=',$remise)->first();
     

        return view('remises.edit',[
            
            'remise'=> $remise
        ]);
    }

   /* public function valid($remise,$demande){
       
        $remise = Remise::find($remise)->first();
        dd($remise);
        $remise->demande->situation = 'validée';
        $remise->save();
        return view('remises.tableRemise');
    }*/

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

    public function update( Request $request, $remise, $demande){
     

        $demande = Demande::where('id','=',$demande)->first();
        
        $demande->Nom = $request->input('Nom');
        $demande->Prénom = $request->input('Prénom');
        $demande->CNE = $request->input('CNE');
        $demande->Apogée = $request->input('Apogée');
        $demande->diplome = $request->input('diplome');
        //$demande->diplome_id = $request->input('diplome_id');
        $demande->Année_scolarité= $request->input('Année_scolarité');

        $demande->save();
   
        $remise = Remise::where('id','=',$remise)->first();
        $remise->dateremise = $request->input('dateremise');
        $remise->situationremise = $request->input('situationremise');
        $remise->demande_id=$demande->id;

        $remise->save();
        session()->flash('success', 'La demande est bien modifié ');

       
        return redirect()->back();
        
    }

    public function destroy(Request $request, $remise, $demande){

     

        $demande = Demande::where('id','=',$demande)->first();


        $demande->delete();

        session()->flash('delete', 'LA demande est suprimmé!!');
        return redirect()->back();
        
    }

}