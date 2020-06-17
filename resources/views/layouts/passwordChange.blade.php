
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
                   <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                        {{session()->get('success')}}
                            </div>

                    @endif

                    @if(session()->has('error'))
                         <div class="alert alert-danger">
                            {{session()->get('error')}}
                        </div>

                    @endif
                    <div class="form-group row">
                        <label for="oldPassword" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                        <div class="col-md-6">
                            <input id="oldPassword" type="Password" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" required autocomplete="new-password">

                            @error('oldPassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Password') }}
                            </button>
                        </div>
                    </div>
                </form>
               </div>



<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
@endsection











