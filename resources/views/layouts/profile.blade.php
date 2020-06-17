@extends('index')

@section('content')

<div class="container" style="width: 60%; margin-top: 12%; margin-left: 25%;">
    <img src="/icons/account.png" width="10%" height="" class="rounded-circle"><br>
    <label>Nom</label><h3>{{ $user['name']}}</h3>
    <label>Email</label><h3>{{ $user['email']}}</h3>


<a href="{{ route('user.edit')}}"><button type="button" class="btn btn-warning">Editer profile</button></a>
<a href="{{ url('/passwordChange')}}"><button type="button" class="btn btn-warning">Changer le mdp</button></a>
</div>
@endsection

<script></script>


