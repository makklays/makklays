
@extends('layouts.simple')

@section('content')

    <div style="text-align:center; margin-left:auto; margin-right:auto; width:700px;">
        <div style="margin-bottom:40px;"><b class="grey">{{ trans('site.mysite_request') }}</b></div>

        <div style="margin-bottom:40px;"><span id="wait"></span></div>

        <div style="margin-bottom:40px; text-align:left; width:700px; border: 1px solid #e7e7e7; font-size:18px; padding:10px;">
            <div class="text-center">
                <h2>{{ trans('site.mysite_request') }}</h2>
            </div>

            <div class="text-center">
                <form action="{{ route('mysite_contacts', app()->getLocale()) }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="{{ trans('site.Name') }}" />

                        <?php if ($errors->has('name')): ?>
                        <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('name')?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group" >
                        <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="{{ trans('site.Email') }}" />

                        <?php if ($errors->has('email')): ?>
                        <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('email')?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <textarea name="message" rows="10" class="form-control" placeholder="{{ trans('site.your_message') }}">{{ old('message') }}</textarea>

                        <?php if ($errors->has('message')): ?>
                        <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('message')?></div>
                        <?php endif; ?>
                    </div>

                    <input type="submit" class="btn btn-success text-center btn-lg" value="Оставить заявку" />
                </form>
            </div>
            <br/><br/>

        </div>
    </div>

    <div style="text-align:center; width:200px; margin-top:40px; margin-left:auto; margin-right:auto; ">
        <div style="margin: 20px 0 10px 0;">
            <a href="{{ route('mysite_request', 'es') }}">ES</a> |
            <a href="{{ route('mysite_request', 'en') }}">EN</a> |
            <a href="{{ route('mysite_request', 'ru') }}">RU</a> |
            <a href="{{ route('mysite_request', 'ch') }}">CH</a>
        </div>
    </div>

@endsection
