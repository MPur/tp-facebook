@extends('../../layout/visitor')

@section('content')
<form class="form" method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="input-group text-center col-sm-12 padding">
        <input class="form-control input-lg" type="text" name="name" placeholder="Nom"  value="{{ old('name') }}">
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <input class="form-control input-lg" type="email" name="email" placeholder="Email"  value="{{ old('email') }}">
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <input class="form-control input-lg" type="password" placeholder="Mot de passe" name="password">
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <input class="form-control input-lg" type="password" placeholder="Confirmer le mot de passe" name="password_confirmation">
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <button class="btn btn-lg btn-primary" type="submit">S'inscrire</button>
    </div>
</form>
@endsection