<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{mix('/css/app.css')}}">
<link rel="stylesheet" href="{{mix('/css/theme.css')}}">

    <title>Gestion</title>
</head>
<body>
  @extends('index')
   @section('content')
       

 <!-- MAIN CONTENT-->

      <div  class="container-fluid" style="padding-top: 110px">
          <div  class="row justify-content-center">
              <div class="col-sm-8 ">
                  <div class="card">
                      <div class="card-header">Formulaire</div>
                      <div class="card-body">
                          <div class="card-title">
                              <h3 class="text-center title-2">Demande de retrait</h3>
                          </div>
                          <hr>
                          <form   action="" method="post" novalidate="novalidate">

                            <div class="row">
                              <div class="col-6">
                                 <div class="form-group has-success">
                                     <label >Nom
                                     <input style="" type="text" class="form-control" id="" placeholder="Nom d'etudiant">
                                     <small id="" class="form-text text-muted"></small>
                                  </div>
                              </div>
                              <div class="col-6">
                              <div class="form-group">
                                <label >Prénom
                                  <input style="" type="text" class="form-control" id="" placeholder="Prénom d'etudiant">
                                  
                                  <small id="" class="form-text text-muted"></small>
                                </div>
                              </div>
                            </div>


                                   <div class="row">
                                     <div class="col-6">
                                        <div class="form-group has-success">
                                            <label >CNE
                                            <input style="" type="text" class="form-control" id="" placeholder="CNE d'etudiant">
                                            <small id="" class="form-text text-muted"></small>
                                         </div>
                                     </div>
                                     <div class="col-6">
                                          <div class="form-group">
                                         <label >Apogée
                                        <input style=""type="text" class="form-control" id="" placeholder="apogée d'etudiant">
                                           <small id="" class="form-text text-muted"></small>
                                       </div>
                                </div>
                                   </div>

                              <div class="row">
                                  <div class="col-6">
                                      <div class="form-group">
                                        <label >Diplome
                                          <input style="" type="text" class="form-control" id="" placeholder="Diplome d'etudiant">
                                          
                                          <small id="" class="form-text text-muted"></small>
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <label >Anneé scolarité
                                      <input style="margin-left: 1px; " type="datetime" class="form-control" id="" placeholder="date">
                                      <small id="" class="form-text text-muted"></small>
                                      </div>
                                  </div>
                              </div>


                              <div class="row">
                                  <div class="col-6">
                                    <button id="Retrait temporaire" type="submit" class="btn btn-lg btn-success btn-block">
                                      <i class="fas fa-stopwatch"></i>&nbsp;
                                      <span id="payment-button-amount">Retrait temporaire</span>
                                      <span id="payment-button-sending" style="display:none;">Sending…</span>
                                  </button>
                                  </div>
                                  <div class="col-6">
                                    <button id="Retrait final" type="submit" class="btn btn-lg btn-dark btn-block">
                                      <i class="fas fa-ban"></i>&nbsp;
                                      <span id="payment-button-amount">Retrait final</span>
                                      <span id="payment-button-sending" style="display:none;">Sending…</span>
                                  </button>
                                  </div>

                              </div>


                              <div style="margin-top: 2px;">
                                  <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block" >
                                      <i class="fas fa-paper-plane"></i>&nbsp;
                                      <span id="payment-button-amount">Envoyer</span>
                                      <span id="payment-button-sending" style="display:none;">Sending…</span>
                                  </button>
                              </div>
                          </form>
                      </div>
                
    

    
    @endsection
    
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>