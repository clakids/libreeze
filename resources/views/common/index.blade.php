@extends('layouts.common')

@section('content')
    <main role="main" class="inner cover">
        <img src="/storage/def_img/logo.png" width="90" height="90" class="shadow-lg p-0 mb-3 rounded-circle bg-info">
        <h1 class="cover-heading">{{ config('app.name', 'LiBreeze') }}</h1>
        <p class="lead">
            AUF Libreeze is developed to streamline the way that AUF students and faculty interact with the library.
            It aims to give its users the ability to discover literature that is related to the portfolio that they have built up basing from their borrowing tendencies.
        </p>
        <p class="lead">
            <a href="/login" class="btn btn-lg btn-info">Log In</a>
        </p>
    </main>
@endsection    