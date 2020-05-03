
@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.m_corporate') }}</h2> <br/>
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <b>Корпоративный сайт</b> — это полноценное представительство компании в интернете и эффективный инструмент
                для привлечения и удержания новых клиентов. <br/><br/>

                Помимо подробной информации о компании и ее услугах, корпоративный сайт может содержать следующие элементы: <br/><br/>

                - новости <br/>
                - рассылки <br/>
                - форму обратной связи <br/>
                - каталог товаров и услуг <br/>
                - форму заказа через сайт <br/>
                - <a href="{{ route('mysite_store', app()->getLocale()) }}" class="a-green">интернет-магазин</a> с оплатой товаров через платежные системы <br/>
                - форум <br/>
                - другие модули, учитывающие специфику конкретной компании.
                 <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="/img/corp.jpg" alt="Corporate site" title="Corporate site" class="img-fluid" />
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <b>Корпоративный сайт</b> - это качественная и полноценная презентация компании в Интернете. Его основная цель
                - привлечь новых клиентов или партнеров (или укрепить существующее партнерское сотрудничество), развить
                бизнес путем раскрытия преимуществ компании, подробного описания ее деятельности, услуг или товаров.
                Цель создания корпоративного сайта зависит, непосредственно, от желаний или потребностей самой компании.
                В том числе, это может быть захват новой ниши или выход на международный рынок. <br/><br/>

                Главной ценностью и отличием корпоративного сайта стало то, что он может выполнять и ряд других задач,
                которые не менее важны для фирмы. В частности, с помощью определенных функций, поддерживать
                круглосуточную взаимосвязь с клиентами или партнерами, являться файлохранилищем и инструментом для
                ведения рабочего процесса сотрудниками компании, их внутреннего общения. Кроме того, корпоративный сайт
                может продавать и рекламировать деятельность компании, став достаточно эффективной рекламной площадкой.
                <br/><br/>

                Таким образом, корпоративный сайт <b>решает следующие задачи</b>: <br/><br/>

                - круглосуточное предоставление подробной информации о компании и ее услугах <br/>
                - своевременное информирование посетителей о новостях и специальных акциях компании <br/>
                - расширение базы клиентов <br/>
                - поддержка пользователей <br/>
                - интерактивное общение с клиентами и посетителями (опросы, вопросы-ответы, форум) <br/>
                - возможность круглосуточного заказа товаров и услуг через сайт <br/>
                - раскрутка имени компании и многое другое. <br/><br/>

                Дизайн корпоративного сайта выполняется с учетом фирменного стиля компании. <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">Основные задачи корпоративного сайта</h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                Задачи сайта напрямую зависит от типа бизнеса и целей компании. Мы же приведем лишь основные. <br/><br/>

                - <b>Формирование и повышение имиджа компании</b> <br/>
                - <b>Расширение клиентской и партнерской базы</b> <br/>
                - <b>Предоставление ЦА (Целевой Аудитории) полной информации о компании</b> <br/>
                    Разделы бизнес-сайта могут быть в любом количестве. Главное, чтобы сайт предоставил максимально возможную
                    информацию о компании. Сюда могут быть включены: <br/>

                    - Информация о самой компании: ее истории, достижениях, результатах работы; <br/>
                    - Информация о руководстве и сотрудниках компании; <br/>
                    - Информация о товарах или услугах, реализуемые фирмой с их очень подробным описанием; <br/>
                    - Всевозможная информация для партнеров; <br/>
                    - Блог и другое. <br/>
                    С информативной точки зрения, корпоративный сайт может содержать абсолютно любой объем контента, который
                    может быть интересен ЦА. <br/><br/>
                - <b>Формирование и повышение имиджа компании</b> <br/>
                - <b>Возможность продажи товаров и услуг</b> <br/>
                - <b>Привлечение новых сотрудников</b> <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">Виды корпоративных сайтов</h2> <br/>
        </div>
        <div class="col-md-12">
            <h4>Корпоративный сайт-визитка</h4> <br/>
            <p class="text-justify">
                Такой сайт выбирают молодые компании, чей бизнес равивается вместе с сайтом. На нем представлена краткая
                информация о компании и предоставляющие ею услуги. <br/><br/>
            </p>
            <h4>Корпоративный сайт-каталог</h4> <br/>
            <p class="text-justify">
                Выделает сразу несколько задач. Информирование о компании в сети интернет и подробное предвставление
                товаров или продукции в виде структурированного каталога. Возможно покупка товара. <br/><br/>
            </p>
            <h4>Корпоративный инфопортал</h4> <br/>
            <p class="text-justify">
                Сделан для несения информации для груп людей по тематике. Может быть обучающий тренинг, информационный
                курс или сайт новостей. <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">Что важно современным сайтам организации?</h2> <br/>
        </div>
        <div class="col-md-5">
            <img src="/img/corp2.jpg" alt="Corporate site" title="Corporate site" class="img-fluid" />
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                - Структура сайта <br/><br/>
                - Оформление сайта компании <br/><br/>
                - Функционал сайта фирмы <br/><br/>
                - Необходимый объем информации <br/><br/>
                - Адаптация к мобильным устройствам <br/><br/>
                - Высокая скорость загрузки сайта <br/><br/>
                - Надежный хостинг <br/><br/>
                - Мультиязычность
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">Выводы</h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                Прежде чем решиться заказать разработку корпоративного сайта, хорошенько подумайте - действительно ли
                вы готовы к этому. Сайт компании - совсем не та история, когда создал сайт, запустил и забыл о нем.
                Во-первых, услуги создания сайта для бизнеса стоят достаточно дорого, об этом не стоит забывать.
                Во-вторых, такой ресурс постоянно требует обновлений, поддержки и своевременной доработки в форс-мажорных
                ситуациях. А это тоже время и деньги. И, порой, немалые, если речь идет об услугах профессионалов.
            </p>
            <p class="text-justify">
                Но если вы уже взвесили все за и против и готовы стать владельцем сайта для бизнеса, то будьте уверены,
                что при условии его соответствия всем техническим и пользовательским требованиям, ваш проект окупит себя,
                решая поставленные ему задачи и позиционируя вашу компанию в лучшем свете.
            </p>
        </div>
    </div>

@endsection