@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('site.Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ trans('site.logged_in') }}
                    <!--pre>
                        <?=print_r(auth()->user()->name)?>
                        <?=print_r(session()->all())?>
                    </pre-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
