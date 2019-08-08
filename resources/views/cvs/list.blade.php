
@extends('layouts.app')

@include('partials.right-menu')

@section('right-menu-cvs')
    <div class="col-md-4">
        <div class="" style="margin:10px;">
            <button id="id-add-cv" class="btn btn-secondary" onclick="location.href='/cvs/add'; return false;" >Add CV</button>
        </div>
        <div class="" style="margin:10px; padding: 5px 20px 5px 20px; border:1px solid grey; border-radius:.3rem;">
            <a href="/jobs">Find Job</a> <br/>
            <hr/>
            <a href="/cvs">My CVs</a> <br/>
            <a href="/cvs/add">Add CVs</a> <br/>
            <a href="/cvs/recomend">Recomendation</a> <br/>
            <a href="/cvs/favorite">Favorite</a> <br/>
            <a href="/cvs/my-otkliki">My otkliki</a> <br/>
            <a href="/cvs/views">Views</a>
            <hr/>
            <a href="/cvs/likejob">Хочу у вас работать</a> <br/>
            <a href="/cvs/bright">Яркое резюме</a> <br/>
            <a href="/cvs/renewcv">Автообновление</a>
            <hr/>
            <a href="/cvs/bright">Рассылки</a> <br/>
            <a href="/cvs/settings">Settings profile</a>
        </div>
        <div class="" style=" margin:10px; border:1px solid grey; border-radius:.3rem;">
            <img src="/img/fon28.jpg" style="width:100%;" />
        </div>
        <div class="" style=" margin:10px; border:1px solid grey; border-radius:.3rem;">
            <img src="/img/WeAreHiring.jpg" style="width:100%;" />
        </div>
    </div>
@endsection


@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">
            <div class="col-md-12">
                <h1>My CVs</h1>
            </div>

            <div class="col-md-9">

                <?php if (isset($cvs) && !empty($cvs)): ?>
                    <?php foreach($cvs as $cv): ?>
                        <div class="" style="border:1px solid #ced4da; padding:10px;">
                            <a href="/cv/<?=$cv->id?>"><?=$cv->title?></a> <br/>
                            <a href="">Last place work</a> <br/>
                            Updated <?=date('d.m.Y H:i:s', $cv->modified_at)?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div style="margin-top:50px;">
                        <i>Not CVs</i>
                    </div>
                <?php endif; ?>
            </div>

            <!--div class="col-md-4">
                <div class="" style="margin:10px;">
                    <button id="id-add-cv" class="btn btn-secondary" onclick="location.href='/cvs/add'; return false;" >Add CV</button>
                </div>
                <div class="" style=" margin:10px; border:1px solid grey; border-radius:.3rem;">
                    <img src="/img/fon28.jpg" style="width:100%;" />
                </div>
                <div class="" style=" margin:10px; border:1px solid grey; border-radius:.3rem;">
                    <img src="/img/WeAreHiring.jpg" style="width:100%;" />
                </div>
            </div-->

            @yield('right-menu')

        </div>
    </div>

@endsection