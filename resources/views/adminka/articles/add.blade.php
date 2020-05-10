@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-8">
                        @include('partials.flash')
                    </div>
                </div>

                <h2>{{ trans('site.Add_article') }}</h2>

                <form action="{{ route('adm-article-add', app()->getLocale()) }}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label for="id-lang" class="col-md-12 col-form-label text-md-left">{{ trans('site.Lang') }}</label>
                        <div class="col-md-1">
                            <select name="lang" class="form-control" id="id-lang">
                                <option value="ru">RU</option>
                                <option value="es">ES</option>
                                <option value="en">EN</option>
                                <option value="ch">CH</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id-name" class="col-md-8 col-form-label text-md-left">{{ trans('site.Title') }}</label>
                        <div class="col-md-8">
                            <input id="id-name" type="text" class="form-control {{ $errors->has('title') ? "red-border" : '' }}" name="title" value="{{ old('title') }}" />
                            <?php if ($errors->has('title')): ?>
                                <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('title')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id-email" class="col-md-8 col-form-label text-md-left">{{ trans('site.Shorttext') }}</label>
                        <div class="col-md-8">
                            <textarea id="id-fulltext" rows="6" class="form-control" name="short_text">{{ old('short_text') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id-email" class="col-md-8 col-form-label text-md-left">{{ trans('site.Fulltext') }}</label>
                        <div class="col-md-8">
                            <textarea id="id-fulltext" rows="12" class="form-control" name="full_text">{{ old('full_text') }}</textarea>
                        </div>
                    </div>

                    <div class="input-group row">
                        <div class="col-md-4 text-left">
                            <div class="custom-file">
                                <input type="file" name="photo" accept="image/jpeg,image/png,image/gif" class="col-md-4 col-form-label" id="id-photo" >
                                <label class="custom-file-label" for="id-photo">{{ trans('site.Add_photo') }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <br/>
                        <input type="checkbox" class="custom-control-input" id="id-visible" name="is_visible">
                        <label class="custom-control-label" for="id-visible">{{ trans('site.Is_visible') }}</label>
                    </div>

                    <br/><br/>
                    <input type="submit" value="{{ trans('site.Add_article') }}" class="btn btn-success text-center" />
                </form>

            </div>
        </div>
    </div>

@endsection
