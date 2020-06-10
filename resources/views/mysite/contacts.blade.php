@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br/><h1 class="text-center text-design2">{{ trans('site.mysite_contacts') }}</h1> <br/>
        </div>
        <div class="col-md-6">
            <img src="<?=config('app.url')?>/img/contacts_.jpg" alt="Makklays - {{ trans('site.mysite_contacts') }} image" title="{{ trans('site.mysite_contacts') }}" class="img-fluid kromka" />
        </div>
        <div class="col-md-6">

            {{ trans('site.contacts1') }} <br/><br/>

            <address>
                <strong>{{ trans('site.Address') }}</strong><br/>
                {{ trans('site.contacts2') }} <br/>
            </address>
            <address>
                <strong>{{ trans('site.mysite_contacts') }}</strong><br/>
                <abbr title="{{ trans('site.contacts_skype') }}">{{ trans('site.contacts_skype') }}:</abbr> makklays <br/>
                <abbr title="{{ trans('site.contacts_mob') }}">{{ trans('site.contacts_mob') }}:</abbr> +38 (098) 870 5397 <br/>
                <a href="mailto:office@makklays.com.ua" class="a-green">office@makklays.com.ua</a> <br/>
            </address>
            <address>
                <strong>{{ trans('site.Times_working') }}</strong> <br/>
                <span>{{ trans('site.mon_fri') }}</span> <br/>
                <span>{{ trans('site.sur_sun') }}</span>
            </address>

        </div>

        <div class="col-md-12" style="margin:30px 0 30px 0;">
            <div class="form-group text-center">
                <a href="{{ route('mysite_brief', app()->getLocale()) }}" target="_blank" class="a-green link-big2">
                    {{ trans('site.mysite_brief') }}
                </a> <br/><br/>

                <a href="{{ route('mysite_online_brief', app()->getLocale()) }}" class="a-green link-big2">
                    {{ trans('site.m_brief_online') }}
                </a> <br/><br/>

                <a href="{{ route('mysite_download_price', app()->getLocale()) }}" class="a-green link-big2">
                    {{ trans('site.mysite_download_price') }}
                </a> <br/><br/>

                <button type="button" id="id_order_development" class="btn btn-success" data-toggle="modal">
                    {{ trans('site.order_development') }}
                </button>
            </div>
        </div>

        <div class="col-md-12 ">
            <div style="height:400px;" id="map" class="kromka"></div>
        </div>
    </div>

    <script>
        var map;
        function initMap() {
            // The location of Uluru
            var makklays = {lat: 50.450, lng: 30.523};
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 50.450, lng: 30.523},
                zoom: 5
            });
            var image = {
                url: 'http://makklays.com.ua/makklays.png',
                //size: new google.maps.Size(40, 42),
                //origin: new google.maps.Point(0, 0),
                //anchor: new google.maps.Point(13, 44),
                draggable: true,
                scaledSize: new google.maps.Size(25, 25)
            };
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: makklays,
                animation: google.maps.Animation.DROP,
                map: map,
                //icon: image,
                title: 'Makklays'
            });

            var contentString = '<div id="content">'+
                '<h5>Makklays</h5>'+
                '<p><?=trans('site.')?></p>'+
                '<div id="bodyContent">'+
                '<p><address>'+
                '<b><?=trans('site.mysite_contacts')?></b><br/>'+
                '<abbr title="<?=trans('site.contacts_skype')?>"><?=trans('site.contacts_skype')?>:</abbr> makklays <br/>'+
                '<abbr title="<?=trans('site.contacts_mob')?>"><?=trans('site.contacts_mob')?>:</abbr> +38 (098) 870 5397 <br/>'+
                '<a href="mailto:office@makklays.com.ua" class="a-green">office@makklays.com.ua</a> <br/>'+
                '</address>'+
                '<address>'+
                '<b><?=trans('site.Times_working')?></b> <br/>'+
                '<span><?=trans('site.mon_fri')?></span> <br/>'+
                '<span><?=trans('site.sur_sun')?></span>'+
                '</address></p>'+
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
            /*marker.addListener('click', toggleBounce);
            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }*/
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARJ6syX24A-hsZMsKFIufHeQYCgevlv4Q&callback=initMap&language=<?=(app()->getLocale() != 'ch' ? app()->getLocale() : 'zh-TW')?>" async defer></script>

@endsection
