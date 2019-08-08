
@extends('layouts.app')

@include('partials.left-menu-filter')


@section('content')

    <style>
        .word-width {
            margin-right: 20px;
            width: 600px;
            float: left;
        }
        .city-width {
            margin-right: 20px;
            width: 200px;
            float: left;
        }
        .bgcolor {
            background-color: #e7e7e7;
            padding-top: 10px;
            margin-bottom: 30px;
            border-radius: 7px;
        }
        .fi-hot {
            background-image: url('/img/hot-icon-26.jpg') no-repeat;
            width:26px;
            height:26px;
        }
    </style>

    <div class="container">
        <div class="row" style="margin: 0;">
            <div class="col-md-12 bgcolor">
                <div style="margin-bottom: 5px;">Find best ...</div>
                <form action="" method="get" class="" style="">
                    <div class="form-group" >
                        <input name="kw" class="form-control word-width" type="text" value="" placeholder="Write keywords.." />

                        <select name="city" class="form-control city-width">
                            <option value="">All cities</option>
                            <?php foreach($regcities as $region): ?>
                                <optgroup label="<?=$region->name?>">
                                    <?php foreach($region->cities as $city): ?>
                                        <option value="<?=$city->id?>" ><?=$city->name?></option>
                                    <?php endforeach; ?>
                                </optgroup>
                            <?php endforeach; ?>
                        </select>

                        <button class="btn btn-secondary" type="submit" style="margin-right: 20px;">Find</button>

                        <a href="/jobs/advanced">Advanced search</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin: 0;">

            <div class="col-md-12">
                <h3><?=$vacancies->total()?> vacancies <?=(!empty($kw) ? ' of «'.$kw.'»' : '')?></h3>
            </div>

            @yield('left-menu-filter')

            <div class="col-md-9">
                <?php if (isset($vacancies) && !empty($vacancies)): ?>
                    <?php foreach($vacancies as $vacancy): ?>
                        <div class="" style="border:1px solid #ced4da; padding:10px;">
                            <div style="width:600px; float:left;">
                                <a href="/vacancy/<?=$vacancy->id?>"><?=$vacancy->title?></a>
                                <?php if ($vacancy->is_hot == 1): ?>
                                    <img src="{{ asset('img/hot1.png') }}" style="width:16px; height:18px; vertical-align:top; margin-top:2px;" />
                                <?php endif; ?>
                                <br/>
                                <a href="/company/<?=$vacancy->id?>" style="font-size:14px;"><?=$vacancy->company_name?></a>
                                <?php if ($vacancy->is_hot == 1): ?>
                                    <img src="{{ asset('img/security-checked.png') }}" style="width:14px; height:14px; vertical-align:top; margin-top:4px;" />
                                <?php endif; ?>
                                <br/>
                                <img src="{{ asset('img/pin3.png') }}" style="width:14px; height:14px; vertical-align:top; margin-top:4px;" />
                                <span style="color:#6c757d; font-size:12px;"><?=$vacancy->city_name?></span>
                            </div>
                            <div class="text-right" style="font-size:18px; font-weight:bold;">
                                <?=(!empty($vacancy->show_salary) ? $vacancy->salary.' '.$vacancy->currency : '')?>
                            </div>
                            <div style="clear:both;"></div>


                            <p>
                                <?=substr($vacancy->description, 0, 300)?>...
                            </p>
                            <div class="">
                                <a href="/vacancy/<?=$vacancy->id?>" style="margin-right:20px;" >To respond</a>
                                <a href="/" class="js-dont-show" data="<?=$vacancy->id?>" style="margin-right:20px;" >Don't show</a>
                                <a href="/" class="js-favorites" data="<?=$vacancy->id?>" ><?=($vacancy->in_fav_user_id == $user_id ? 'Delete from favorites' : 'To favorites')?></a>
                            </div>
                            <div class="text-right">
                                Updated <?=date('d.m.Y H:i', $vacancy->public_date)?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div style="margin-top: 30px;">
                        <?php echo $vacancies->render(); ?>
                    </div>

                <?php endif; ?>
            </div>

        </div>
    </div>

    <script>
        $('.js-favorites').on('click', function(){
            // alert( $(this).attr('data') );

            var click_elem = $(this);
            var vac_id = $(this).attr('data');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // sent data to site
            $.ajax({
                type: "POST",
                url: '/cvs/change-favorite/' + vac_id,
                //data: {choice: choi, param:"valu"},
                beforeSend: function () {
                    // preloader
                    //$('#id-loader-test').css('display', 'block');
                },
                complete: function () {
                    // complete
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Error
                    alert('Error!');
                    console.log(textStatus, errorThrown);
                },
                success: function (response) {
                    // success
                    //alert(response.result);
                    //location.href = '/test-result';
                    if (response.is_success == 1) {
                        if (response.is_del == 1) {
                            click_elem.html('Add to favorites');
                        } else {
                            click_elem.html('Delete from favorites');
                        }
                    }
                },
                dataType: 'json'
            });

            return false;
        });

        $('.js-dont-show').on('click', function(){
            alert('nnn');

            $(this).parent().parent().css('display', 'none');

            return false;
        });
    </script>

@endsection