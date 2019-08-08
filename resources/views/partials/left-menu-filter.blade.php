
@section('left-menu-filter')

    <style>
        .bl-parts {
            margin: 0 0 10px 0;
            padding: 0 10px 5px 10px;
            border:1px solid #ced4da;
            border-radius:.3rem;
        }
        .bl-part-fil {
            margin: 15px 0 0px 0;
            color: #000; /*#777;*/
            padding-left: 10px;
            font-size: 16px;
            font-weight: bold;
        }
        .ul-row-filter {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .li-row-filter {
            line-height: 10px;
            box-sizing: border-box;
            position: relative;
            width: 100%;
            display: table;
            border-collapse: separate;
            margin: 1px 0;
            padding: 0 10px;
        }
        .li-row-filter:hover {
            background-color: #dddddd;
        }
        .a-filter {
            display:table-row;
            cursor: pointer;
        }
        .sp-1 {
            display:table-cell; max-width: 115px; line-height: 1.5;
        }
        .sp-2 {
            display:table-cell; text-align:right; line-height: 1.5;
        }
    </style>

    <div class="col-md-3 text-left">
        <div class="bl-parts">
            <div class="bl-part-fil" style="margin-top:5px;">City</div>
            <div >
                <ul class="ul-row-filter">
                    <?php foreach($cities as $city): ?>
                        <li class="li-row-filter">
                            <a href="<?=$_SERVER['REQUEST_URI']?>&city=<?=$city->id?>" class="a-filter">
                                <span class="sp-1"><?=$city->name?></span>
                                <span class="sp-2">111</span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="bl-part-fil">Salary</div>
            <div >
                <ul class="ul-row-filter">
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">Указана</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">от 1000</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">от 2000</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">от 3000</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">от 4000</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">от 5000</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">от 6000</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">от 7000</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bl-part-fil">Prof oblast</div>
            <div >
                <ul class="ul-row-filter">
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">IT</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">Medicina</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">Education</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bl-part-fil">Otrasl companii</div>
            <div >
                <ul class="ul-row-filter">
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">Информационные технологии, системная интеграция, интернет</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">Medicina</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="" class="a-filter">
                            <span class="sp-1">Education</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bl-part-fil">Experience</div>
            <div >
                <ul class="ul-row-filter">
                    <li class="li-row-filter">
                        <a href="<?=$_SERVER['REQUEST_URI']?>&expr=1" class="a-filter">
                            <span class="sp-1">От 1 года до 3 лет</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="<?=$_SERVER['REQUEST_URI']?>&expr=2" class="a-filter">
                            <span class="sp-1">От 3 до 6 лет</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="<?=$_SERVER['REQUEST_URI']?>&expr=3" class="a-filter">
                            <span class="sp-1">Более 6 лет</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="<?=$_SERVER['REQUEST_URI']?>&expr=4" class="a-filter">
                            <span class="sp-1">Нет опыта</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bl-part-fil">Type of job</div>
            <div >
                <ul class="ul-row-filter">
                    <li class="li-row-filter">
                        <a href="<?=$_SERVER['REQUEST_URI']?>&type=1" class="a-filter">
                            <span class="sp-1">Full time</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="<?=$_SERVER['REQUEST_URI']?>&type=2" class="a-filter">
                            <span class="sp-1">Part time</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="<?=$_SERVER['REQUEST_URI']?>&type=3" class="a-filter">
                            <span class="sp-1">Internship / Practice</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="<?=$_SERVER['REQUEST_URI']?>&type=4" class="a-filter">
                            <span class="sp-1">Remote work</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                    <li class="li-row-filter">
                        <a href="<?=$_SERVER['REQUEST_URI']?>&type=5" class="a-filter">
                            <span class="sp-1">Project work</span>
                            <span class="sp-2">111</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="" style="margin:10px 0 10px 0; border:1px solid grey; border-radius:.3rem;">
            <img src="/img/fon28.jpg" style="width:100%;" />
        </div>
        <div class="" style="margin:10px 0 10px 0; border:1px solid grey; border-radius:.3rem;">
            <img src="/img/WeAreHiring.jpg" style="width:100%;" />
        </div>
    </div>
@endsection