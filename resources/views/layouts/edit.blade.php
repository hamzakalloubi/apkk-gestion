
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
                <div class="card-header">Editer</div>
                <div class="card-body" style="padding-bottom: 0;">
                    <div class="card-title">
                        <h3 class="text-center title-2">Modifier votre profile</h3>
                    </div>
                    <hr>
                    <form   method="POST" action="{{ route('user.update') }}">
                      @csrf
                      <div class="">
                        <div class="">
                           <div class="form-group has-success">
                               <label >Nom :
                                  <input type="text" value="{{ $user['name']}}" name="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom">
                                  <small id="" class="form-text text-muted"></small>
                                  
                                  @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
                            
                              </div>
                        </div>
                        <div class="">
                        <div class="form-group">
                          <label >Email :
                              <input id="email" type="email"  value="{{ $user['email']}}" placeholder="Email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                            <small id="" class="form-text text-muted"></small>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          
                          </div>
                        </div>
                      </div>


                        @if($errors->any())
                        <ul style="margin-left: 40px;">
                          @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                        @endif

                        <div style="margin-top: 2px;">
                            <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block" >
                                <i class="fas fa-paper-plane"></i>&nbsp;
                                <span id="payment-button-amount">update</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                </div>



<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
@endsection











