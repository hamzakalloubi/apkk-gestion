<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="/icons/schedule.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Remise</title>
</head>
<body>
  @extends('index')
   @section('content')


 <!-- MAIN CONTENT-->

      <div  class="container-fluid" style="padding-top: 20px">

        	
	@if(session()->has('success'))
  <div class="alert alert-success">
{{session()->get('success')}}
</div>

@endif


          <div  class="row justify-content-center">
              <div class="col-sm-8 ">

                  <div class="card">
                      <div class="card-header">Formulaire</div>
                      <div class="card-body" style="padding-bottom: 0;">
                          <div class="card-title">
                              <h3 class="text-center title-2">Demande de remise</h3>
                          </div>
                          <hr>
                          <form   action="{{  route('remises.update', ['demande' => $remise->demande->id,'remise'=>$remise->id] )}}" method="POST" novalidate="novalidate">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="row">
                              <div class="col-6">
                                 <div class="form-group has-success">
                                     <label >Nom :
                                     <input style="" type="text" class="form-control" name="Nom" value="{{ old('Nom', $remise->demande->Nom)}}">
                                     <small id="" class="form-text text-muted"></small>
                                  </div>
                              </div>
                              <div class="col-6">
                              <div class="form-group">
                                <label >Prénom :
                                  <input style="" type="text" class="form-control" name="Prénom" value="{{ old('Nom', $remise->demande->Prénom)}}">

                                  <small id="" class="form-text text-muted"></small>
                                </div>
                              </div>
                            </div>


                                   <div class="row">
                                     <div class="col-6">
                                        <div class="form-group has-success">
                                            <label >CNE :
                                            <input style="" type="text" class="form-control" name="CNE" value="{{ old('Nom', $remise->demande->CNE)}}">
                                            <small id="" class="form-text text-muted"></small>
                                         </div>
                                     </div>
                                     <div class="col-6">
                                          <div class="form-group">
                                         <label >Apogée :
                                        <input style=""type="text" class="form-control" name="Apogée" value="{{ old('Nom', $remise->demande->Apogée)}}">
                                           <small id="" class="form-text text-muted"></small>
                                       </div>
                                </div>
                                   </div>

                                   <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                          <label >Diplome :
                                            <select  name="diplome" class="form-control" value="{{ old('diplome', $remise->demande->diplome)}}">
                                              <option value="Baccalauréat">Baccalauréat</option>
                                              <option value="Deug">Deug</option>
                                              <option value="Licence ">Licence </option>                       
                                              <option value="Master">Master</option>
                                          </select>
                                        </div>

                                  </div>
                                  <div class="col-6">
                                    <label >Anneé scolarité :
                                      <input style="margin-left: 1px; " type="text" name="Année_scolarité" class="form-control" value="{{ old('Nom', $remise->demande->Année_scolarité)}}">
                                      <small id="" class="form-text text-muted"></small>
                                      </div>

                                  </div>
                              </div>


                              <div style="margin-top: 2px;">
                                  <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block" >
                                      <i class="fas fa-paper-plane"></i>&nbsp;
                                      <span id="payment-button-amount">Update</span>
                                      <span id="payment-button-sending" style="display:none;">Sending…</span>
                                  </button>
                              </div>
                          </form>
                      </div>




    @endsection

    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
