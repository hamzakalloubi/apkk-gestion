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

      <div  class="container-fluid" style="padding-top: 90px">
          <div  class="row justify-content-center">
              <div class="col-sm-8 ">

                  <div class="card">
                      <div class="card-header">Formulaire</div>
                      <div class="card-body" style="padding-bottom: 0;">
                          <div class="card-title">
                              <h3 class="text-center title-2">Demande de remise</h3>
                          </div>
                          <hr>
                          <form   action="{{route('remises.store')}}" method="POST" novalidate="novalidate">
                            @csrf
                            <div class="row">
                              <div class="col-6">
                                 <div class="form-group has-success">
                                     <label >Nom :
                                     <input style="" type="text" class="form-control" name="Nom" placeholder="Nom d'etudiant">
                                     <small id="" class="form-text text-muted"></small>
                                  </div>
                              </div>
                              <div class="col-6">
                              <div class="form-group">
                                <label >Prénom :
                                  <input style="" type="text" class="form-control" name="Prénom" placeholder="Prénom d'etudiant">

                                  <small id="" class="form-text text-muted"></small>
                                </div>
                              </div>
                            </div>


                                   <div class="row">
                                     <div class="col-6">
                                        <div class="form-group has-success">
                                            <label >CNE :
                                            <input style="" type="text" class="form-control" name="CNE" placeholder="CNE d'etudiant">
                                            <small id="" class="form-text text-muted"></small>
                                         </div>
                                     </div>
                                     <div class="col-6">
                                          <div class="form-group">
                                         <label >Apogée :
                                        <input style=""type="text" class="form-control" name="Apogée" placeholder="apogée d'etudiant">
                                           <small id="" class="form-text text-muted"></small>
                                       </div>
                                </div>
                                   </div>

                              <div class="row">
                                  <div class="col-6">
                                      <div class="form-group">
                                        <label >Diplome :
                                          <select name="select" name="Diplome" class="form-control">
                                            <option value="1">bacalauriat</option>
                                            <option value="2">deug</option>
                                            <option value="3">Licence</option>
                                            <option value="2">Master</option>
                                        </select>
                                      </div>

                                  </div>
                                  <div class="col-6">
                                    <label >Anneé scolarité :
                                      <input style="margin-left: 1px; " type="text" name="Année_scolarité" class="form-control" id="" placeholder="date">
                                      <small id="" class="form-text text-muted"></small>
                                      </div>

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
