
@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br/><h2 class="text-center text-design2">{{ trans('site.mysite_request') }}</h2> <br/>
        </div>
        <div class="col-md-12 text-center">
            <p class="text-center text-justify">
                Заполните форму и наши менеджеры свяжутся с Вами
            </p>
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

                <input type="submit" class="btn btn-success text-center btn-lg" value="Отправить бриф" />
                <br/><br/>
            </form>
        </div>
    </div>

@endsection
