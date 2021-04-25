@extends('layouts.main10')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div style="margin: 100px 0;">
            <h1 class="text-design2">Ooooops!</h1>
            <p><?=trans('site.blacklist_secr')?></p>
            <p>
                101 1 110 00111 1010 11 000 101 <br/>
                000 0 101 10101 1100 01 010 111 <br/>
                001 1 010 01111 1110 10 001 100 <br/>
                101 0 1IN BLACK LIST 10 010 001 <br/>
                100 0 110 00110 1110 00 100 101 <br/>
            </p>
            <!--img src="/img/404.png" class="img-fluid" alt="Error 404" title="Error 404" /-->
            <h2 class="text-design4">You are in black list, hacker!</h2>
        </div>
    </div>
</div>

@endsection
