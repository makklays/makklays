@extends('layouts.main10')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/', app()->getLocale()) }}" class="a-green"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('mysite_whatmake', app()->getLocale()) }}" class="a-green">{{ trans('site.Development') }}</a></li>
            <li class="breadcrumb-item" aria-current="page">{{ trans('site.system_site') }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.system_site') }}</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-left">
            <p class="text-left">
                {{ trans('price.text_system') }} <br/>
                {{ trans('price.descr_packet') }}
            </p> <br/><br/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{ trans('price.simple') }}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ trans('price.system_simple_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.system_si1') }}</li>
                            <li>&#10004; {{ trans('price.system_si2') }}</li>
                            <li>&#10004; {{ trans('price.system_si3') }}</li>
                            <li>&#10004; {{ trans('price.system_si4') }}</li>
                            <li>&#10004; {{ trans('price.system_si5') }}</li>
                            <li>&#10004; {{ trans('price.system_si6') }}</li>
                            <li>&#10004; {{ trans('price.system_si7') }}</li>
                            <li>&#10004; {{ trans('price.system_si8') }}</li>
                            <li>&#10004; {{ trans('price.system_si9') }}</li>
                            <li>&#10004; {{ trans('price.system_si10') }}</li>
                            <li>&#10004; {{ trans('price.system_si11') }}</li>
                            <li>&#10004; {{ trans('price.system_si12') }}</li>
                            <li>&#10004; {{ trans('price.system_si13') }}</li>
                            <li>&#10004; {{ trans('price.system_si14') }}</li>
                        </ul>
                        <a type="button" href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{ trans('price.standart') }}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ trans('price.system_standart_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.system_st1') }}</li>
                            <li>&#10004; {{ trans('price.system_st2') }}</li>
                            <li>&#10004; {{ trans('price.system_st3') }}</li>
                            <li>&#10004; {{ trans('price.system_st4') }}</li>
                            <li>&#10004; {{ trans('price.system_st5') }}</li>
                            <li>&#10004; {{ trans('price.system_st6') }}</li>
                            <li>&#10004; {{ trans('price.system_st7') }}</li>
                            <li>&#10004; {{ trans('price.system_st8') }}</li>
                            <li>&#10004; {{ trans('price.system_st9') }}</li>
                            <li>&#10004; {{ trans('price.system_st10') }}</li>
                            <li>&#10004; {{ trans('price.system_st11') }}</li>
                            <li>&#10004; {{ trans('price.system_st12') }}</li>
                            <li>&#10004; {{ trans('price.system_st13') }}</li>
                            <li>&#10004; {{ trans('price.system_st14') }}</li>
                            <li>&#10004; {{ trans('price.system_st15') }}</li>
                            <li>&#10004; {{ trans('price.system_st16') }}</li>
                        </ul>
                        <a type="button" href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{ trans('price.individual') }}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ trans('price.system_individual_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.system_in1') }}</li>
                            <li>&#10004; {{ trans('price.system_in2') }}</li>
                            <li>&#10004; {{ trans('price.system_in3') }}</li>
                            <li>&#10004; {{ trans('price.system_in4') }}</li>
                            <li>&#10004; {{ trans('price.system_in5') }}</li>
                            <li>&#10004; {{ trans('price.system_in6') }}</li>
                            <li>&#10004; {{ trans('price.system_in7') }}</li>
                            <li>&#10004; {{ trans('price.system_in8') }}</li>
                            <li>&#10004; {{ trans('price.system_in9') }}</li>
                            <li>&#10004; {{ trans('price.system_in10') }}</li>
                            <li>&#10004; {{ trans('price.system_in11') }}</li>
                            <li>&#10004; {{ trans('price.system_in12') }}</li>
                            <li>&#10004; {{ trans('price.system_in13') }}</li>
                            <li>&#10004; {{ trans('price.system_in14') }}</li>
                            <li>&#10004; {{ trans('price.system_in15') }}</li>
                            <li>&#10004; {{ trans('price.system_in16') }}</li>
                            <li>&#10004; {{ trans('price.system_in17') }}</li>
                            <li>&#10004; {{ trans('price.system_in19') }}</li>
                            <li>&#10004; {{ trans('price.system_in20') }}</li>
                        </ul>
                        <a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <p class="text-left">
                {{ trans('site.system_site1') }}
                <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/system.jpg" class="img-fluid" alt="Makklays - Site-System image1" title="Site-System" />
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.system_site2') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.system_site3')?>
            </p>
        </div>

        <!--
        <div class="col-md-12">
            <h2 class="text-center text-design2">8 преимуществ использования CRM для бизнеса</h2>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                В условиях современного высококонкурентного рынка компании, которые управляют отношениями с клиентами,
                имеют гораздо более высокие шансы на успех, чем те, которые этого не делают. <br/><br/>

                Профессионально реализованные CRM-системы обеспечивают множество преимуществ для отдела продаж,
                маркетинга, службы поддержки и не только. И вот основные из них. <br/><br/>

                <b>1. Прирост продуктивности</b> <br/><br/>

                Многие ручные процессы автоматизируются, что существенно повышает отдачу от работы сотрудников и
                эффективность работы компании в целом. Важный момент в контексте – возможность отойти от необходимости
                использования целого ряда отдельных инструментов, например Google Docs, систем планирования задач,
                чата и других отдельных сервисов. Во многих CRM все это интегрировано в единую систему. <br/><br/>

                Кроме того, взаимодействие между отделами становится более целостным, а руководитель при необходимости
                всегда может оценить общую картину работы. В B2B-бизнесе, например, жизненный срок клиента, как правило,
                слишком сложный, чтобы его мог оценивать только один сотрудник. <br/><br/>

                <b>2. Автоматизация</b> <br/><br/>

                У каждой компании есть повторяющиеся задачи, например отправка отчетов по итогам месяца, на которые
                может уходить много времени. Некоторые CRM позволяют настроить их выполнение в автоматическом режиме,
                избавив сотрудников от однообразных задач. <br/><br/>

                Еще одна приятная возможность – настройка уведомлений, например напоминаний о дедлайнах или
                необходимости совершить определенное действие. Так что можно не держать все в голове и при этом ничего
                не забывать. <br/><br/>

                <b>3. Данные, данные, данные</b> <br/><br/>

                Вся информация по конкретному клиенту хранится в одном месте, и при необходимости доступ к ней легко
                можно предоставить другому человеку. Задачи в автоматическом или ручном режиме распределяются между
                сотрудниками, и каждый понимает, чем он должен заниматься в данный момент. <br/><br/>

                Облачные платформы обеспечивают безопасное и организованное хранение информации о клиентах. Все данные
                не только хранятся в одном месте, но и доступны только для авторизованных пользователей. Можно забыть
                о шкафах с бумагами и файликах в Excel. <br/><br/>

                <b>4. Эффективное планирование и отслеживание</b> <br/><br/>

                Выполнение многих задач идет не по плану, когда люди делают все вручную. С внедрением CRM-системы можно
                планировать и контролировать задачи проще и более прозрачно. <br/><br/>

                Если на каком-нибудь этапе происходит провал или появляется проблема, которая мешает дальнейшей
                реализации проекта, легко определить, что и где пошло не так, кто за это ответственен и как сделать так,
                чтобы проблема не повторилась. <br/><br/>

                <b>5. Польза для маркетинга</b> <br/><br/>

                Становится возможным четкое отслеживание каждого из этапов воронки продаж и понятно, как та или иная
                маркетинговая активность влияет на поток заказов. Причем возможностей применения именно для
                интернет-маркетинга более чем достаточно. <br/><br/>

                В частности, CRM-система позволяет получить правильное представление о самых прибыльных группах
                клиентов, а затем на основе этих данных верно настроить таргетинг. Таким образом, можно правильно
                оптимизировать использование доступного бюджета. <br/><br/>

                <b>6. Интеграция с другими продуктами</b> <br/><br/>

                Попытки сделать продукт, который работал бы по принципу «все в одном», редко заканчиваются успехом.
                Поэтому некоторые разработчики CRM-систем пошли по другому пути, реализовав интеграцию с другими
                сервисами, например для бухгалтерского учета, управления проектами, e-mail-рассылок и т. д. <br/><br/>

                Это позволяет сделать организацию бизнес-процессов максимально бесшовной и выполнять большую часть
                работы на базе единой платформы. <br/><br/>

                <b>7. Доступность из любого места</b> <br/><br/>

                Я уже писал, что практически все наиболее популярные на рынке CRM сейчас доступны в формате SaaS, то
                есть облачного сервиса, доступ к которому можно получить как со стационарного PC, так и с мобильного
                устройства, и не важно, где вы в данный момент находитесь. <br/><br/>

                Вы всегда мечтали об удаленной работе, но из-за того, что вся информация хранилась в офисном PC,
                вынуждены были отказывать себе в таком удовольствии? Ну что ж, считайте, что теперь такой проблемы нет. <br/><br/>

                <b>8. Улучшение отношений с клиентами</b> <br/><br/>

                В конечном счете одно из основных преимуществ CRM-систем, которое они обеспечивают компании, что их
                использует, – улучшение общего качества обслуживания клиентов. Растет вероятность того, что текущие
                заказчики порекомендуют вас своим знакомым как ответственного и надежного исполнителя. <br/><br/>

                При использовании таких систем повышается точность и упрощается работа по их сегментированию,
                потребности определяются и заносятся в базу данных, задачи реализуются в срок и точно отслеживаются.
                Все это приводит к сокращению терминов заключения договоров, росту прибыли и высокому уровню удержания
                клиентов из-за того, что растет их удовлетворенность. <br/><br/>

                На старте, впрочем, можно обойтись и без подобных инструментов — достаточно будет админки
                интернет-магазина. Возможность перехода на CRM стоит рассматривать при росте посещаемости до уровня
                выше 1000 пользователей в день, большом количестве продаж и повторных заказах.
            </p>
        </div-->

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.system_site4') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.system_site5')?>
                <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.system_site6') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.system_site7')?>
            </p>
        </div>
    </div>

@endsection
