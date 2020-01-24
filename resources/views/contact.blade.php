@extends('layouts.app')

@section('content')
    <h1>contact</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('contact-form-submit') }}">
    @csrf
    <div class="form-group">
        <label for="naam">Naam</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Vul hier naam in">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Vul hier email in">
        <small id="emailHelp" class="form-text text-muted">Uw email word niet gedeeld met anderen, ik ben geen facebook natuurlijk ;-) </small>
    </div>  

    <div class="form-group">
        <label for="onderwerp">Onderwerp</label>
        <input type="text" class="form-control" name="onderwerp" id="onderwerp" placeholder="Vul hier onderwerp in">
    </div>

    <div class="form-group">
        <label for="bericht">Vul hier bericht in</label>
        <textarea class="form-control" name="bericht" id="bericht" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Verstuur</button>
</form>

@endsection