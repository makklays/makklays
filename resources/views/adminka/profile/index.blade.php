@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="">{{ trans('site.Profile') }}</h2> <br/>
            </div>
        </div>

        <form action="{{ route('profile-post', app()->getLocale()) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="id_name">{{ trans('site.Name') }}</label>
                        <input name="name" type="text" id="id_name" value="{{ $user->name }}" class="form-control" />
                        <?php if ($errors->has('name')): ?>
                        <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;">
                            <?=$errors->first('name')?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="id_email">{{ trans('site.Email') }}</label>
                        <input name="email" type="text" id="id_email" value="{{ $user->email }}" class="form-control" />
                        <?php if ($errors->has('email')): ?>
                        <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;">
                            <?=$errors->first('email')?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-success" value="{{ trans('site.Save') }}" />
        </form>

        <div class="row">
            <div class="col-md-8">
                <br/>
                <span>Первый вход</span> <span>{{ date('d.m.Y H:i:s', strtotime($user->created_at)) }}</span>
            </div>
            <div class="col-md-8">
                <span>Последний вход</span> <span>{{ date('d.m.Y H:i:s', strtotime($user->updated_at)) }}</span>
            </div>
        </div>
    </div>
@endsection
