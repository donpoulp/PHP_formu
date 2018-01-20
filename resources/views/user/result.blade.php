@extends('template')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du formulaire</h2>
        </div>
        <div class="panel-body">
            <h3>Firstname</h3>
            <p>valeur : <b>{{ $user['firstname'] }}</b></p>

            <h3>Gender</h3>
            <p>valeur : <b>{{ $user['gender'] }}</b></p>

            <h3>Newsletter</h3>
            <p>valeur : <b>{{ $user['newsletter'] }}</b></p>

            <h3>Mood</h3>
            <p>valeur : <b><!-- A Completer --></b></p>
        </div>
    </div>

    
@endsection
