@extends('template')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="jumbotron">
            <p class="text-center">
                <h2>Formulaire #1: Utilisateur</h2>
                <p><a class="btn btn-primary btn-lg" href="/user/create" role="button">Go !</a></p>
            </p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="jumbotron">
            <p class="text-center">
                <h2>Formulaire #2: News</h2>
                <p><a class="btn btn-primary btn-lg" href="/news/create" role="button">Go !</a></p>
            </p>
        </div>
    </div>
</div>
@endsection
