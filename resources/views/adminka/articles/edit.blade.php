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

                <h2>{{ trans('site.Edit_article') }}</h2>

                <!--pre>
                    <?=print_r($article)?>
                </pre-->

                <form action="{{ route('adm-article-edit', ['lang'=>app()->getLocale(), 'article_id'=>$article->id]) }}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label for="id-lang" class="col-md-12 col-form-label text-md-left">{{ trans('site.Lang') }}</label>
                        <div class="col-md-1 text-left">
                            <select name="lang" class="form-control" id="id-lang">
                                <option value="ru" {{ $article->lang == 'ru' ? 'selected="selected"' : '' }} >RU</option>
                                <option value="es" {{ $article->lang == 'es' ? 'selected="selected"' : '' }} >ES</option>
                                <option value="en" {{ $article->lang == 'en' ? 'selected="selected"' : '' }} >EN</option>
                                <option value="ch" {{ $article->lang == 'ch' ? 'selected="selected"' : '' }} >CH</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id-name" class="col-md-8 col-form-label text-md-left">{{ trans('site.Title') }}</label>
                        <div class="col-md-8">
                            <input id="id-name" type="text" class="form-control {{ $errors->has('title') ? "red-border" : '' }}" name="title" value="{{ $article->title }}" />
                            <?php if ($errors->has('title')): ?>
                                <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('title')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id-slag" class="col-md-8 col-form-label text-md-left">{{ trans('site.Slag') }}</label>
                        <div class="col-md-8">
                            <input id="id-slag" type="text" class="form-control {{ $errors->has('slag') ? "red-border" : '' }}" name="slag" value="{{ $article->slag }}" />
                            <?php if ($errors->has('slag')): ?>
                                <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('slag')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id-email" class="col-md-8 col-form-label text-md-left">{{ trans('site.Shorttext') }}</label>
                        <div class="col-md-8">
                            <textarea id="id-fulltext" rows="6" class="form-control" name="short_text">{{ $article->short_text }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id-email" class="col-md-8 col-form-label text-md-left">{{ trans('site.Fulltext') }}</label>
                        <div class="col-md-8">
                            <textarea id="id-fulltext" rows="12" class="form-control" name="full_text">{{ $article->full_text }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id-views" class="col-md-12 col-form-label text-md-left">{{ trans('site.Views') }}</label>
                        <div class="col-md-4">
                            <input id="id-views" type="text" class="form-control" name="views" value="{{ $article->views }}" >
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <?php if (isset($article->photo) && !empty($article->photo)): ?>
                            <img src="/articles/imgs/<?=$article->photo?>" alt="." title="<?=$article->title?>" class="img-fluid kromka" style="width:200px;" />
                        <?php else: ?>
                            <img src="/img/empty_img2.png" alt="." title="<?=$article->title?>" class="img-fluid kromka" style="width:200px;" />
                        <?php endif; ?>
                    </div>
                    <br/>

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
                        <input type="checkbox" class="custom-control-input" id="id-visible" name="is_visible" <?=(isset($article->is_visible) && !empty($article->is_visible) ? 'checked="checked"' : '')?> >
                        <label class="custom-control-label" for="id-visible">{{ trans('site.Is_visible') }}</label>
                    </div>

                    <br/><br/>
                    <input type="submit" value="{{ trans('site.Edit_article') }}" class="btn btn-success text-center" />
                </form>

            </div>
        </div>
    </div>

@endsection
