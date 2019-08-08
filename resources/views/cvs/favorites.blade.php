
@extends('layouts.app')

@include('partials.right-menu')

@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">

            <div class="col-md-12">
                <h1><?=count($favorites)?> favorites vacancies</h1>
            </div>

            <div class="col-md-9">
                <?php if (isset($favorites) && !empty($favorites)): ?>
                    <?php foreach($favorites as $favor): ?>
                        <div class="" style="border:1px solid #ced4da; padding:10px;">
                            <a href="/vacancy/<?=$favor->id?>"><?=$favor->title?></a>
                            <?php if ($favor->is_hot == 1): ?>
                            <img src="img/hot1.png" style="width:18px; height:18px; vertical-align:top; margin-top:2px;" />
                            <?php endif; ?>
                            <br/>
                            <a href="/company/<?=$favor->id?>">Company name</a>
                            <?php if ($favor->is_hot == 1): ?>
                            <img src="img/security-checked.png" style="width:14px; height:14px; vertical-align:top; margin-top:4px;" />
                            <?php endif; ?>
                            <br/>
                            <p>
                                <?=substr($favor->description, 0, 300)?>...
                            </p>
                            <div class="">
                                <a href="/vacancy/<?=$favor->id?>" style="margin-right:20px;" >To respond</a>
                                <a href="/" class="js-dont-show" data="<?=$favor->id?>" style="margin-right:20px;" >Don't show</a>
                                <a href="/" class="js-favorites" data="<?=$favor->id?>" >To favorites</a>
                            </div>
                            <div class="text-right">
                                Updated <?=date('d.m.Y H:i', $favor->public_date)?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div style="margin-top:50px;">
                        <i>Not favorites vacancies</i>
                    </div>
                <?php endif; ?>
            </div>

            @yield('right-menu')

        </div>
    </div>
@endsection