
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">
            <h1>Link(s)</h1>
        </div>

        <div class="col-md-6">
            <!--a href="{{ route('about2', app()->getLocale()) }}">About me</a> <br/><br/-->

            <a href="<?=config('app.url')?>/cv_alexander_kuziv.html">1 - My CV</a> <br/>
            <a href="<?=config('app.url')?>/cv_alexander_kuziv_ru.html">2 - My CV (ru)</a> <br/>
        </div>
    </div>

@endsection
