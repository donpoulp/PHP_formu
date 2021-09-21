@extends('template')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du formulaire</h2>
        </div>
        <div class="panel-body">
            <h3>Title</h3>
            <p>valeur : <b>{{ $news['title'] }}</b></p>

            <h3>Content</h3>
            <p>valeur : <b>{{ $news['content'] }}</b></p>
        </div>

    
@endsection
