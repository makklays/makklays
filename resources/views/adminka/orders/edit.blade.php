@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @include('partials.flash')

                <h2>{{ trans('site.Add_order') }}</h2>

                <form action="{{ route('adm-order-edit', ['lang'=>app()->getLocale(), 'order_id' => $order->id]) }}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="id-lang" class="col-md-12 col-form-label text-md-left">{{ trans('site.Lang') }}</label>
                                <select name="lang" class="form-control" id="id-lang">
                                    <option value="ru" {{ $order->lang == 'ru' ? 'selected="selected"' : '' }} >RU</option>
                                    <option value="es" {{ $order->lang == 'es' ? 'selected="selected"' : '' }} >ES</option>
                                    <option value="en" {{ $order->lang == 'en' ? 'selected="selected"' : '' }} >EN</option>
                                    <option value="ch" {{ $order->lang == 'ch' ? 'selected="selected"' : '' }} >CH</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group ">
                                <label for="id-price" class="col-md-12 col-form-label text-md-left">{{ trans('site.Price') }}</label>
                                <input id="id-price" type="text" class="form-control" name="price" value="{{ $order->price_uah }}" required >
                                <?php if ($errors->has('price')): ?>
                                    <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('price')?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="id-status" class="col-md-12 col-form-label text-md-left">{{ trans('site.Type_site') }}</label>
                                <select name="type_site" class="form-control" id="id-status">
                                    <option>--- {{ trans('site.Choose') }} ---</option>
                                    <option value="landing" {{ $order->type_site == 'landing' ? 'selected="selected"' : '' }} >{{ trans('site.m_lpage') }}</option>
                                    <option value="internet-shop" {{ $order->type_site == 'internet-shop' ? 'selected="selected"' : '' }} >{{ trans('site.m_store') }}</option>
                                    <option value="corporate-site" {{ $order->type_site == 'corporate-site' ? 'selected="selected"' : '' }} >{{ trans('site.m_corporate') }}</option>
                                    <option value="webapi" {{ $order->type_site == 'webapi' ? 'selected="selected"' : '' }} >{{ trans('site.m_webportal') }}</option>
                                    <option value="webportal" {{ $order->type_site == 'webportal' ? 'selected="selected"' : '' }} >{{ trans('site.m_sitesystem') }}</option>
                                    <option value="site-system" {{ $order->type_site == 'site-system' ? 'selected="selected"' : '' }} >{{ trans('site.m_webapi') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="id-lang" class="col-md-12 col-form-label text-md-left">{{ trans('site.Status') }}</label>
                                <select name="status" class="form-control" id="id-lang">
                                    <option value="new" {{ $order->status == 'new' ? 'selected="selected"' : '' }} >New</option>
                                    <option value="designing" {{ $order->status == 'designing' ? 'selected="selected"' : '' }} >Designing</option>
                                    <option value="inprocess" {{ $order->status == 'inprocess' ? 'selected="selected"' : '' }} >In process</option>
                                    <option value="testing" {{ $order->status == 'testing' ? 'selected="selected"' : '' }} >Testing</option>
                                    <option value="done" {{ $order->status == 'done' ? 'selected="selected"' : '' }} >Done</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="id-name" class="col-md-8 col-form-label text-md-left">{{ trans('site.Title') }}</label>
                        <input id="id-name" type="text" class="form-control" name="title" value="{{ $order->title }}" >
                        <?php if ($errors->has('title')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('title')?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group ">
                        <label for="id-email" class="col-md-8 col-form-label text-md-left">{{ trans('site.Shorttext') }}</label>
                        <textarea id="id-fulltext" rows="6" class="form-control" name="short_text">{{ $order->short_text }}</textarea>
                        <?php if ($errors->has('short_text')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('short_text')?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group ">
                        <label for="id-email" class="col-md-8 col-form-label text-md-left">{{ trans('site.Description') }}</label>
                        <textarea id="id-fulltext" rows="12" class="form-control" name="description">{{ $order->description }}</textarea>
                        <?php if ($errors->has('description')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('description')?></div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id-from-date" class="col-md-12 col-form-label text-md-left">{{ trans('site.From_date') }}</label>
                                <input type="text" id="id-from-date" class="form-control" name="from_date" value="{{ $order->from_date }}" />
                                <small>Формат: 2020-06-01</small>
                                <?php if ($errors->has('from_date')): ?>
                                    <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('from_date')?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="id-to-date" class="col-md-12 col-form-label text-md-left">{{ trans('site.To_date') }}</label>
                                <input type="text" id="id-to-date" class="form-control" name="to_date" value="{{ $order->to_date }}" />
                                <small>Формат: 2020-06-01</small>
                                <?php if ($errors->has('to_date')): ?>
                                    <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('to_date')?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(function() {
                            $.datepicker.setDefaults( $.datepicker.regional['ru'] );

                            $( "#id-from-date" ).datepicker({
                                dateFormat: "yy-mm-dd",
                                todayHighlight: true,
                                autoclose: true,
                                changeMonth: true,
                                changeYear: true,
                                weekStart: 0,
                                calendarWeeks: true,
                                rtl: true,
                                orientation: "auto"
                            });
                            $( "#id-to-date" ).datepicker({
                                dateFormat: "yy-mm-dd",
                                todayHighlight: true,
                                autoclose: true,
                                changeMonth: true,
                                changeYear: true,
                                weekStart: 0,
                                calendarWeeks: true,
                                rtl: true,
                                orientation: "auto"
                            });
                        });
                    </script>

                    <div class="row">
                        <div class="col-md-6 text-left">
                            <div class="input-group ">
                                <div class="custom-file">
                                    <input type="file" name="tzfile" class="col-md-4 col-form-label" id="id-photo" >
                                    <label class="custom-file-label" for="id-photo">{{ trans('site.Add_file') }}</label>
                                    <?php if ($errors->has('tzfile')): ?>
                                        <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:red;"><?=$errors->first('tzfile')?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br/><br/>
                    <input type="submit" value="{{ trans('site.Edit_order') }}" class="btn btn-success text-center" />
                </form>

            </div>
        </div>
    </div>

@endsection
