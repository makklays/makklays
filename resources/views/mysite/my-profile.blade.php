
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">
            <h1>My profile</h1>
        </div>

        <div class="col-md-6">
            <?=$user->name?> <br/>
            <?=$user->email?> <br/><br/>
            <?=date('d/m/Y H:I:s', strtotime($user->created_at))?>
        </div>
    </div>

@endsection
