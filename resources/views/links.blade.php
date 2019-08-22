
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">
            <h1>Link(s)</h1>
        </div>

        <div class="col-md-6">
            <!--a href="{{ route('about') }}">About me</a> <br/><br/-->

            <a href="/cv_alexander_kuziv.html">My CV</a> <br/>
            <a href="/cv_alexander_kuziv_ru.html">My CV (ru)</a> <br/>
        </div>
    </div>

@endsection