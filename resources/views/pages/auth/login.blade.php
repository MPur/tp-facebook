@extends('layout.visitor')

@section('content')
<form method="POST" action="{{route('auth.login')}}">
    {!! csrf_field() !!}

    <div class="input-group text-center col-sm-12 padding">
        <input class="form-control input-lg" type="email" name="email" placeholder="Email"  value="{{ old('email') }}">
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <input class="form-control input-lg" type="password" placeholder="Mot de passe" name="password">
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <button class="btn btn-lg btn-primary" type="submit">Se connecter</button>
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <a href="inscription">Si vous n'avez pas de compte inscrivez vous ici</a>
    </div>

    </div>
</form>
@endsection