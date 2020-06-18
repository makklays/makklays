@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @include('partials.flash')

                <h2>{{ trans('site.Add_order') }}</h2>

                <form action="{{ route('adm-order-add', app()->getLocale()) }}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="id-lang" class="col-md-12 col-form-label text-md-left">{{ trans('site.Lang') }}</label>
                                <select name="lang" class="form-control" id="id-lang">
                                    <option value="ru">RU</option>
                                    <option value="es">ES</option>
                                    <option value="en">EN</option>
                                    <option value="ch">CH</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group ">
                                <label for="id-price" class="col-md-12 col-form-label text-md-left">{{ trans('site.Price') }}</label>
                                <input id="id-price" type="text" class="form-control" name="price" value="{{ old('price') }}" required >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="id-status" class="col-md-12 col-form-label text-md-left">{{ trans('site.Type_site') }}</label>
                                <select name="type_site" class="form-control" id="id-status">
                                    <option>--- {{ trans('site.Choose') }} ---</option>
                                    <option value="landing">{{ trans('site.m_lpage') }}</option>
                                    <option value="internet-shop">{{ trans('site.m_store') }}</option>
                                    <option value="corporate-site">{{ trans('site.m_corporate') }}</option>
                                    <option value="webapi">{{ trans('site.m_webportal') }}</option>
                                    <option value="webportal">{{ trans('site.m_sitesystem') }}</option>
                                    <option value="site-system">{{ trans('site.m_webapi') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="id-lang" class="col-md-12 col-form-label text-md-left">{{ trans('site.Status') }}</label>
                                <select name="status" class="form-control" id="id-lang">
                                    <option value="new">New</option>
                                    <option value="designing">Designing</option>
                                    <option value="inprocess">In process</option>
                                    <option value="testing">Testing</option>
                                    <option value="done">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="id-name" class="col-md-8 col-form-label text-md-left">{{ trans('site.Title') }}</label>
                        <input id="id-name" type="text" class="form-control" name="title" value="{{ old('title') }}" >
                    </div>

                    <div class="form-group ">
                        <label for="id-email" class="col-md-8 col-form-label text-md-left">{{ trans('site.Shorttext') }}</label>
                        <textarea id="id-fulltext" rows="6" class="form-control" name="short_text">{{ old('short_text') }}</textarea>
                    </div>

                    <div class="form-group ">
                        <label for="id-email" class="col-md-8 col-form-label text-md-left">{{ trans('site.Description') }}</label>
                        <textarea id="id-fulltext" rows="12" class="form-control" name="description">{{ old('description') }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id-from-date" class="col-md-12 col-form-label text-md-left">{{ trans('site.From_date') }}</label>
                                <input type="text" id="id-from-date" class="form-control" name="from_date" value="{{ old('from_date') }}" />
                                <small>Формат: 2020-06-01</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="id-to-date" class="col-md-12 col-form-label text-md-left">{{ trans('site.To_date') }}</label>
                                <input type="text" id="id-to-date" class="form-control" name="to_date" value="{{ old('to_date') }}" />
                                <small>Формат: 2020-06-01</small>
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
                                    <input type="file" name="photo" class="col-md-4 col-form-label" id="id-photo" >
                                    <label class="custom-file-label" for="id-photo">{{ trans('site.Add_file') }}</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br/><br/>
                    <input type="submit" value="{{ trans('site.Add_order') }}" class="btn btn-success text-center" />
                </form>

            </div>
        </div>
    </div>

@endsection
