
@extends('layouts.app')

@include('partials.right-menu')


@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">
            <div class="col-md-12">
                <h1>Add CV</h1>
            </div>
            <div class="col-md-9">

                <form action="{{ route('cvs_add') }}" method="post">

                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group required">
                                <label for="id-email">E-mail:</label>
                                <input name="email" value="<?=(isset($email) && !empty($email) ? $email : '')?>" type="email" class="form-control" id="id-email" placeholder="name@example.com">
                                <!--small id="id-txt-email" class="text-muted">
                                    This will be your username.
                                </small-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group required">
                                <label for="id-phone" required="required" >Phone:</label>
                                <input name="phone" value="<?=(isset($phone) && !empty($phone) ? $phone : '')?>" type="text" class="form-control" id="id-phone" placeholder="+38 090 123 4567">
                                <!--small id="id-txt-phone" class="text-muted">
                                    We'll send information about your account to this inbox.
                                </small-->
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="id-site">Site:</label>
                        <input name="site" type="text" class="form-control" id="id-site" placeholder="http://mysite.com">
                        <!--small id="id-txt-password" class="text-muted">
                            Must be 8-20 characters long.
                        </small-->
                    </div>

                    <h2 class="title">Post</h2>
                    <div class="form-group required">
                        <label for="id-post">Post:</label>
                        <input name="post" type="text" class="form-control" id="id-post" placeholder="What will a post in company?">
                        <!--small id="id-txt-password" class="text-muted">
                            Must be 8-20 characters long.
                        </small-->
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group required">
                                <label for="id-typejob">Type of job:</label>
                                <select name="typejob" class="form-control" id="id-typejob" >
                                    <option value="1">Full time</option>
                                    <option value="2">Part time</option>
                                    <option value="3">Internship / Practice</option>
                                    <option value="4">Remote work</option>
                                    <option value="5">Project work</option>
                                </select>
                                <!--small id="id-txt-password" class="text-muted">
                                    Must be 8-20 characters long.
                                </small-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group required">
                                <label for="id-salary">Salary per month:</label>
                                <div style="clear:both;"></div>
                                <input name="salary" type="text" class="form-control" id="id-salary" placeholder="100" style="width:165px; float:left; margin-right:20px;">
                                <select name="currency" class="form-control" id="id-currency" style="width:100px; float:left; ">
                                    <option value="eur">EUR</option>
                                    <option value="usd">USD</option>
                                </select>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>

                    <h2 class="title">Short about me</h2>
                    <div class="form-group">
                        <label for="id-about">About me ..</label>
                        <textarea name="about" rows="7" type="text" class="form-control" id="id-about" placeholder="I'm ..."></textarea>
                    </div>

                    <h2 class="title">Card license</h2>
                    <div class="form-group">
                        <input id="id-has-car" type="checkbox" style="margin-right:10px;"   />
                        <label for="id-about">Has private car</label>
                    </div>
                    <div class="form-group">
                        <label for="id-about">Категория прав:</label> <br/>
                        <input id="id-has-a" type="checkbox" style="margin-right:10px;"  /> A
                        <input id="id-has-b" type="checkbox" style="margin-right:10px; margin-left:20px;" /> B
                        <input id="id-has-c" type="checkbox" style="margin-right:10px; margin-left:20px;" /> C
                        <input id="id-has-d" type="checkbox" style="margin-right:10px; margin-left:20px;" /> D
                        <input id="id-has-e" type="checkbox" style="margin-right:10px; margin-left:20px;" /> E
                        <input id="id-has-be" type="checkbox" style="margin-right:10px; margin-left:20px;" /> BE
                        <input id="id-has-ce" type="checkbox" style="margin-right:10px; margin-left:20px;" /> CE
                        <input id="id-has-de" type="checkbox" style="margin-right:10px; margin-left:20px;" /> DE
                        <input id="id-has-tm" type="checkbox" style="margin-right:10px; margin-left:20px;" /> Tm
                        <input id="id-has-tb" type="checkbox" style="margin-right:10px; margin-left:20px;" /> Tb
                    </div>

                    <h2 class="title">Experience</h2>
                    <div class="form-group">
                        <label for="id-title-company">Title company:</label> <br/>
                        <input name="title_company" class="form-control" type="text" value="" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id-city">Cities:</label> <br/>
                                <select name="city_id" class="form-control" >
                                    <option value="">Cities</option>
                                    <?php foreach($cities as $city): ?>
                                        <option value="<?=$city->id?>"><?=$city->name?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id-city">Sfera deyatelnosti:</label> <br/>
                                <select name="city_id" class="form-control" >
                                    <option value="">Sfera deyatelnosti</option>
                                    <?php foreach($sds as $itm): ?>
                                        <option value="<?=$itm->id?>"><?=$itm->title?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group required">
                                <label for="id-month">Period of work:</label>
                                <div style="clear:both;"></div>
                                <input name="m_from" type="text" maxlength="2" class="form-control" id="id-month-from" placeholder="07" style="width:50px; float:left; margin-right:20px;">
                                <!-- label for="id-year">Year</label -->
                                <select name="y_from" class="form-control" id="id-year-from" style="width:80px; float:left; margin-right:30px; ">
                                    <?php for($i = date('Y'); $i >= (date('Y') - 80); $i--): ?>
                                        <option value="<?=$i?>" ><?=$i?></option>
                                    <?php endfor; ?>
                                </select>

                                <input name="m_from" type="text" maxlength="2" class="form-control" id="id-month-from" placeholder="07" style="width:50px; float:left; margin-right:20px;">
                                <!-- label for="id-year">Year</label -->
                                <select name="y_from" class="form-control" id="id-year-from" style="width:80px; float:left; ">
                                    <?php for($i = date('Y'); $i >= (date('Y') - 80); $i--): ?>
                                    <option value="<?=$i?>" ><?=$i?></option>
                                    <?php endfor; ?>
                                </select>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="id-site">Site:</label>
                            <input name="site" type="text" class="form-control" id="id-site" placeholder="http://site.." value="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="id-description">Description:</label>
                            <textarea name="description" rows="7" type="text" class="form-control" id="id-description" placeholder="......" style="margin-bottom: 20px;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-br-oran">+ Add a place work</button>
                    </div>

                    <h2 class="title">Educations</h2>
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="form-group">
                                <label for="id-place">Title place of education:</label>
                                <input name="title-place" type="text" class="form-control" id="id-place" placeholder="" value="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="id-facultet">Facultet:</label>
                                <input name="facultet" type="text" class="form-control" id="id-facultet" placeholder="" value="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="id-specialist">Specialization:</label>
                                <input name="specialist" type="text" class="form-control" id="id-specialist" placeholder="" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id-year-end">Year end:</label>
                                <input name="year-end" type="text" class="form-control" id="id-year-end" placeholder="1872" value="" style="width:110px;" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <input id="id-is-educ" name="is-educ" type="checkbox" value="" style="margin-top:40px;" />
                                <label for="id-is-educ">education now</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-br-oran">+ Add education</button>
                    </div>

                    <!--h2 class="title">Your part</h2>
                    <div class="form-group">
                        <p>text text text ...</p>
                        <button type="submit" class="btn btn-br-oran">+ Add your part</button>
                    </div-->

                    <h2 class="title">Languages</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Languages:</label> <br/>
                                <select name="lang_id" class="form-control" >
                                    <option value="">Choose languages</option>
                                    <?php foreach($langs as $lang): ?>
                                        <option value="<?=$lang->id?>"><?=$lang->name?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Level:</label> <br/>
                                <select name="level_id" class="form-control" >
                                    <option value="">Choose level of knowledge</option>
                                    <?php foreach($levels as $level): ?>
                                        <option value="<?=$level->id?>"><?=$level->title?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-br-oran">+ Add a language</button>
                    </div>

                    <div class="hr"></div>

                    <!--p class="to-info">
                        <small id="id-txt-agree" class="text-muted">
                            By clicking “Create an account” below, you agree to our Terms of Service and Privacy Statement.
                            We’ll occasionally send you account-related emails.
                        </small>
                    </p-->

                    <button type="submit" class="btn btn-success">Create an account</button>

                    <br/><br/>
                </form>
            </div>

            @yield('right-menu')

        </div>
    </div>

@endsection