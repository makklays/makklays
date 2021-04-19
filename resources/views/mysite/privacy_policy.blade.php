@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">{{ trans('site.mysite_policy') }}</h1> <br/>
        </div>

        <div class="col-md-12">
            <?= trans('site.policy1', ['lang'=>app()->getLocale()]) ?>
        </div>

        <div class="col-md-12 text-justify">
            <br/><h2 class="text-center">1. {{ trans('site.policy_termins') }}</h2><br/>
        </div>
        <div class="col-md-12 text-justify">
            <?=trans('site.policy2')?>
        </div>

        <div class="col-md-12 text-justify">
            <br/><h2 class="text-center">2. <?=trans('site.policy3')?></h2><br/>
        </div>
        <div class="col-md-12 text-justify">
            <?=trans('site.policy4')?>
        </div>

        <div class="col-md-12 text-justify">
            <br/><h2 class="text-center">3. <?=trans('site.policy5')?></h2><br/>
        </div>
        <div class="col-md-12 text-justify">
            <?=trans('site.policy6')?>
        </div>

        <div class="col-md-12 text-justify">
            <br/><h2 class="text-center">4. <?=trans('site.policy7')?></h2><br/>
        </div>
        <div class="col-md-12 text-justify">
            <?=trans('site.policy8')?>
        </div>

        <div class="col-md-12 text-justify">
            <br/><h2 class="text-center">5. <?=trans('site.policy9')?></h2><br/>
        </div>
        <div class="col-md-12 text-justify">
            <?=trans('site.policy10')?>
        </div>

        <div class="col-md-12 text-justify">
            <br/><h2 class="text-center">6. <?=trans('site.policy11')?></h2><br/>
        </div>
        <div class="col-md-12 text-justify">
            <?=trans('site.policy12')?>
        </div>

        <div class="col-md-12 text-justify">
            <br/><h2 class="text-center">7. <?=trans('site.policy13')?></h2><br/>
        </div>
        <div class="col-md-12 text-justify">
            <?=trans('site.policy14')?>
        </div>
        <!--h2 class="text-center">8. Разрешение споров</h2>
        <p class="col-md-12">
            До обращения в суд с иском по спорам, возникающим из отношений между Пользователем сайта Makklays и Администрацией сайта, обязательным является предъявление претензии (письменного предложения о добровольном урегулировании спора).
            Получатель претензии в течение 30 календарных дней со дня получения претензии, письменно уведомляет заявителя претензии о результатах рассмотрения претензии.
            При не достижении соглашения спор будет передан на рассмотрение в судебный орган в соответствии с действующим законодательством Украины.
            К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией сайта применяется действующее законодательство Украины.
        </p-->
        <div class="col-md-12 text-justify">
            <br/><h2 class="text-center">8. <?=trans('site.policy15')?></h2><br/>
        </div>
        <div class="col-md-12 text-justify">
            <?=trans('site.policy16')?> <a href="https://makklays.com/{{ app()->getLocale() }}/privacy-policy/" class="a-green" title="Makklays - Политики конфиденциальности">https://makklays.com/{{ app()->getLocale() }}/privacy-policy/</a>
            <br/><br/><br/>
        </div>
    </div>

@endsection
