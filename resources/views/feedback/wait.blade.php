@extends('layouts.simple')

@section('content')

    <div style="text-align:center; margin-left:auto; margin-right:auto; width:300px;">
        <div style="margin-bottom:40px;"><b class="grey">{{ trans('wait.i_wait_you_') }}</b></div>

        <div style="margin-bottom:40px;"><span id="wait"></span></div>

        <div style="margin-bottom:40px; text-align:center; width:300px; border: 1px solid #e7e7e7; font-size:26px; padding:10px;">
            {{ trans('wait.text_wait') }} <br/><br/>
            {{ trans('wait.i_wait_you') }} <br/>
            <!--&#9742;--> &#9749; <span style="color:red;">&#10084;</span> <br/><br/>
            {{ trans('wait.smile') }})
        </div>
    </div>

    <div style="text-align:center; width:322px; margin-top:40px; margin-left:auto; margin-right:auto; ">
        <div style="margin: 20px 0 10px 0;">
            <a href="{{ route('wait', 'es') }}">ES</a> |
            <a href="{{ route('wait', 'en') }}">EN</a> |
            <a href="{{ route('wait', 'ru') }}">RU</a> |
            <a href="{{ route('wait', 'ch') }}">CH</a>
        </div>
    </div>

    <style>
        .font-count {
            font-size: 40px;
            color: #46bf00;
        }
    </style>

    <script>
        $('#wait').countdown('2020/06/02 15:00:00', function(event) {
            $(this).html(event.strftime(''
                + '<span class="font-count">%D</span> <br/> {{ trans('wait.days') }} <br/>'
                + '<span class="font-count">%H : %M : %S</span>'
            ));
        });

        /*$('#wait').countdown('2019/11/16 16:00:00', function(event) {
            var $this = $(this).html(event.strftime(''
                + '<span>%w</span> weeks '
                + '<span>%d</span> days '
                + '<span>%H</span> hr '
                + '<span>%M</span> min '
                + '<span>%S</span> sec'));
        });*/
        /*$('#clock-c').html(event.strftime('%D days'));*/
    </script>

@endsection
