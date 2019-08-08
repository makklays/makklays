
@extends('layouts.app')

@include('partials.right-menu')

@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">

            <div class="col-md-12">
                <h1><?=count($recommends)?> recommends vacancies</h1>
            </div>

            <div class="col-md-9">
                <?php if (isset($recommends) && !empty($recommends)): ?>
                <?php foreach($recommends as $recom): ?>
                <div class="" style="border:1px solid #ced4da; padding:10px;">
                    <a href="/vacancy/<?=$recom->id?>"><?=$recom->title?></a>
                    <?php if ($recom->is_hot == 1): ?>
                        <img src="{{ asset('img/hot1.png') }}" style="width:18px; height:18px; vertical-align:top; margin-top:2px;" />
                    <?php endif; ?>
                    <br/>
                    <a href="/company/<?=$recom->id?>">Company name</a>
                    <?php if ($recom->is_hot == 1): ?>
                        <img src="{{ asset('img/security-checked.png') }}" style="width:14px; height:14px; vertical-align:top; margin-top:4px;" />
                    <?php endif; ?>
                    <br/>
                    <p>
                        <?=substr($recom->description, 0, 300)?>...
                    </p>
                    <div class="">
                        <a href="/vacancy/<?=$recom->id?>" style="margin-right:20px;" >To respond</a>
                        <a href="/" class="js-dont-show" data="<?=$recom->id?>" style="margin-right:20px;" >Don't show</a>
                        <a href="/" class="js-favorites" data="<?=$recom->id?>" >To favorites</a>
                    </div>
                    <div class="text-right">
                        Updated <?=date('d.m.Y H:i', $recom->public_date)?>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                <div style="margin-top:50px;">
                    <i>Not recommends vacancies</i>
                </div>
                <?php endif; ?>
            </div>

            @yield('right-menu')

        </div>
    </div>
@endsection