
@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br/><h2 class="text-center text-design2">{{ trans('site.Brief_on_development_site') }}</h2>
            <p class="text-justify">
                {{ trans('site.brief1') }} <br/><br/>
                {{ trans('site.brief2') }} <br/><br/>
                {{ trans('site.brief3') }} <br/><br/>
            </p>
        </div>
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.Base_info') }}</h2> <br/>

            <form action="{{ route('mysite_online_brief_post', app()->getLocale()) }}" method="post">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_name">{{ trans('site.Name') }}</label>
                            <input name="name" type="text" id="id_name" value="{{ old('name') }}" class="form-control" placeholder="{{ trans('site.Name_pl') }}" />

                            <?php if ($errors->has('name')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('name')?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_email">{{ trans('site.Email') }}</label>
                            <input name="email" type="email" id="id_email" value="{{ old('email') }}" class="form-control" placeholder="you@company.com" />

                            <?php if ($errors->has('email')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('email')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_phone">{{ trans('site.Phone') }} *</label>
                            <input name="phone" type="text" id="id_phone" value="{{ old('phone') }}" class="form-control" placeholder="{{ trans('site.Phone_pl') }}*" />

                            <?php if ($errors->has('phone')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('phone')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="id_site">{{ trans('site.brief_Site_company') }}</label>
                            <input name="site" type="text" id="id_site" value="{{ old('site') }}" class="form-control" placeholder="example.eu" />

                            <?php if ($errors->has('site')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('site')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group" >
                            <label for="id_company">{{ trans('site.brief_Name_company') }}</label>
                            <input name="company" type="text" id="id_company" value="{{ old('company') }}" class="form-control" placeholder="{{ trans('site.brief_Name_company_pl') }}" />

                            <?php if ($errors->has('company')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('company')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!--div class="col-md-6">
                        <div class="form-group" >
                            <label for="id_site">Сайт вашей компании, если есть</label>
                            <input name="site" type="text" id="id_site" value="{{ old('site') }}" class="form-control" placeholder="" />

                            <?php if ($errors->has('site')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('site')?></div>
                            <?php endif; ?>
                        </div>
                    </div-->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_site">{{ trans('site.brief_Region_company') }}</label>
                            <textarea name="business" rows="4" class="form-control" placeholder="{{ trans('site.brief_Region_company_pl') }}">{{ old('business') }}</textarea>
                            <?php if ($errors->has('business')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('business')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_site">{{ trans('site.brief_Urls_company') }}</label>
                            <textarea name="concurents" rows="4" class="form-control" placeholder="{{ trans('site.brief_Urls_company_pl') }}">{{ old('concurents') }}</textarea>
                            <?php if ($errors->has('concurents')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('concurents')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_site">{{ trans('site.brief_Geografy') }}</label>
                            <textarea name="geografy" rows="4" class="form-control" placeholder="{{ trans('site.brief_Geografy_pl') }}">{{ old('geografy') }}</textarea>
                            <?php if ($errors->has('geografy')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('geografy')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_site">{{ trans('site.brief_Time_development') }}</label>
                            <textarea name="sroki" rows="4" class="form-control" placeholder="{{ trans('site.brief_Time_development_pl') }}">{{ old('sroki') }}</textarea>
                            <?php if ($errors->has('sroki')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('sroki')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!--div class="col-md-6">
                        <div class="form-group">
                            <label for="id_site">Сроки разработки</label>
                            <textarea name="sroki" rows="4" class="form-control" placeholder="Укажите желаемые сроки разработки, если сроки жестко ограничены - можно указать причину ограничения">{{ old('sroki') }}</textarea>
                            <?php if ($errors->has('sroki')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('sroki')?></div>
                            <?php endif; ?>
                        </div>
                    </div-->

                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="id_budget">{{ trans('site.brief_Budget') }}</label>
                            <input name="budget" type="text" id="id_budget" value="{{ old('budget') }}" class="form-control" placeholder="" />

                            <?php if ($errors->has('budget')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('budget')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_site">{{ trans('site.brief_Contact_lico') }}</label>
                            <textarea name="lico" rows="4" class="form-control" placeholder="{{ trans('site.brief_Contact_lico_pl') }}">{{ old('lico') }}</textarea>
                            <?php if ($errors->has('lico')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('lico')?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <br/><h4 class="text-center text-design2">{{ trans('site.Goal_site_and_funct') }}</h4>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.Objectives_site') }}</h4> <br/>
                            {{ trans('site.Objectives_site_desc') }}
                        </p>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="goal[1]" class="custom-control-input"  id="id_goal1">
                            <label class="custom-control-label" for="id_goal1">{{ trans('site.obj_site1') }}</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="goal[2]" class="custom-control-input"  id="id_goal2">
                            <label class="custom-control-label" for="id_goal2">{{ trans('site.obj_site2') }}</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="goal[3]" class="custom-control-input"  id="id_goal3">
                            <label class="custom-control-label" for="id_goal3">{{ trans('site.obj_site3') }}</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="goal[4]" class="custom-control-input"  id="id_goal4">
                            <label class="custom-control-label" for="id_goal4">{{ trans('site.obj_site4') }}</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="goal[5]" class="custom-control-input"  id="id_goal5">
                            <label class="custom-control-label" for="id_goal5">{{ trans('site.obj_site5') }}</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="goal[6]" class="custom-control-input"  id="id_goal6">
                            <label class="custom-control-label" for="id_goal6">{{ trans('site.obj_site6') }}</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="goal[7]" class="custom-control-input"  id="id_goal7">
                            <label class="custom-control-label" for="id_goal7">{{ trans('site.obj_site7') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.Type_site') }}</h4> <br/>
                            {{ trans('site.Type_site_desc') }}
                        </p>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_type1" value="{{ trans('site.type_site1') }}" name="sitetype" class="custom-control-input">
                            <label class="custom-control-label" for="id_type1">{{ trans('site.type_site1') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_type2" value="{{ trans('site.type_site2') }}" name="sitetype" class="custom-control-input">
                            <label class="custom-control-label" for="id_type2">{{ trans('site.type_site2') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_type3" value="{{ trans('site.type_site3') }}" name="sitetype" class="custom-control-input">
                            <label class="custom-control-label" for="id_type3">{{ trans('site.type_site3') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_type4" value="{{ trans('site.type_site4') }}" name="sitetype" class="custom-control-input">
                            <label class="custom-control-label" for="id_type4">{{ trans('site.type_site4') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.Services_for_connect') }}</h4> <br/>
                            {{ trans('site.Services_for_connect_select') }}
                        </p>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[1]" class="custom-control-input" id="id_serv1">
                            <label class="custom-control-label" for="id_serv1">{{ trans('site.breif_Form_fedback') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[2]" class="custom-control-input" id="id_serv2">
                            <label class="custom-control-label" for="id_serv2">{{ trans('site.brief_100') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[3]" class="custom-control-input" id="id_serv3">
                            <label class="custom-control-label" for="id_serv3">{{ trans('site.brief_101') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[4]" class="custom-control-input" id="id_serv4">
                            <label class="custom-control-label" for="id_serv4">{{ trans('site.brief_102') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[5]" class="custom-control-input" id="id_serv5">
                            <label class="custom-control-label" for="id_serv5">{{ trans('site.brief_103') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[6]" class="custom-control-input" id="id_serv6">
                            <label class="custom-control-label" for="id_serv6">{{ trans('site.brief_104') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[7]" class="custom-control-input" id="id_serv7">
                            <label class="custom-control-label" for="id_serv7">{{ trans('site.brief_105') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[8]" class="custom-control-input" id="id_serv8">
                            <label class="custom-control-label" for="id_serv8">{{ trans('site.brief_106') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[9]" class="custom-control-input" id="id_serv9">
                            <label class="custom-control-label" for="id_serv9">{{ trans('site.brief_107') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[10]" class="custom-control-input" id="id_serv10">
                            <label class="custom-control-label" for="id_serv10">{{ trans('site.brief_108') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[11]" class="custom-control-input" id="id_serv11">
                            <label class="custom-control-label" for="id_serv11">{{ trans('site.brief_109') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="connect[12]" class="custom-control-input" id="id_serv12">
                            <label class="custom-control-label" for="id_serv12">{{ trans('site.brief_110') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_111') }}</h4> <br/>
                            {{ trans('site.brief_112') }}
                        </p>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[1]" class="custom-control-input" id="id_prod1">
                            <label class="custom-control-label" for="id_prod1">{{ trans('site.brief_113') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[2]" class="custom-control-input" id="id_prod2">
                            <label class="custom-control-label" for="id_prod2">{{ trans('site.brief_114') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[3]" class="custom-control-input" id="id_prod3">
                            <label class="custom-control-label" for="id_prod3">{{ trans('site.brief_115') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[4]" class="custom-control-input" id="id_prod4">
                            <label class="custom-control-label" for="id_prod4">{{ trans('site.brief_116') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[5]" class="custom-control-input" id="id_prod5">
                            <label class="custom-control-label" for="id_prod5">{{ trans('site.brief_117') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[6]" class="custom-control-input" id="id_prod6">
                            <label class="custom-control-label" for="id_prod6">{{ trans('site.brief_118') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[7]" class="custom-control-input" id="id_prod7">
                            <label class="custom-control-label" for="id_prod7">{{ trans('site.brief_119') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[8]" class="custom-control-input" id="id_prod8">
                            <label class="custom-control-label" for="id_prod8">{{ trans('site.brief_120') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[9]" class="custom-control-input" id="id_prod9">
                            <label class="custom-control-label" for="id_prod9">{{ trans('site.brief_121') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[10]" class="custom-control-input" id="id_prod10">
                            <label class="custom-control-label" for="id_prod10">{{ trans('site.brief_122') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[11]" class="custom-control-input" id="id_prod11">
                            <label class="custom-control-label" for="id_prod11">{{ trans('site.brief_123') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[12]" class="custom-control-input" id="id_prod12">
                            <label class="custom-control-label" for="id_prod12">{{ trans('site.brief_124') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[13]" class="custom-control-input" id="id_prod13">
                            <label class="custom-control-label" for="id_prod13">{{ trans('site.brief_125') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="pdodaga[14]" class="custom-control-input" id="id_prod14">
                            <label class="custom-control-label" for="id_prod14">{{ trans('site.brief_126') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_127') }}</h4> <br/>
                            {{ trans('site.brief_128') }}
                        </p>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="itegr[1]" class="custom-control-input" id="id_int1">
                            <label class="custom-control-label" for="id_int1">{{ trans('site.brief_129') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="itegr[2]" class="custom-control-input" id="id_int2">
                            <label class="custom-control-label" for="id_int2">{{ trans('site.brief_130') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="itegr[3]" class="custom-control-input" id="id_int3">
                            <label class="custom-control-label" for="id_int3">{{ trans('site.brief_131') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="itegr[4]" class="custom-control-input" id="id_int4">
                            <label class="custom-control-label" for="id_int4">{{ trans('site.brief_132') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="itegr[5]" class="custom-control-input" id="id_int5">
                            <label class="custom-control-label" for="id_int5">{{ trans('site.brief_133') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="id_lang">{{ trans('site.brief_134') }}</label>
                            <input name="language" type="text" id="id_lang" value="{{ old('language') }}" class="form-control" placeholder="{{ trans('site.brief_135') }}" />

                            <?php if ($errors->has('language')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('language')?></div>
                            <?php endif; ?>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_136') }}</h4> <br/>
                            {{ trans('site.brief_137') }}
                        </p>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_cms1" value="{{ trans('site.brief_138') }}" name="manage_site" class="custom-control-input">
                            <label class="custom-control-label" for="id_cms1">{{ trans('site.brief_138') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_cms2" value="{{ trans('site.brief_139') }}" name="manage_site" class="custom-control-input">
                            <label class="custom-control-label" for="id_cms2">{{ trans('site.brief_139') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_cms3" value="{{ trans('site.brief_140') }}" name="manage_site" class="custom-control-input">
                            <label class="custom-control-label" for="id_cms3">{{ trans('site.brief_140') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_141') }}</h4>
                        </p>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_adaptive1" value="{{ trans('site.brief_142') }}" name="adaptive" class="custom-control-input">
                            <label class="custom-control-label" for="id_adaptive1">{{ trans('site.brief_142') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_adaptive2" value="{{ trans('site.brief_143') }}" name="adaptive" class="custom-control-input">
                            <label class="custom-control-label" for="id_adaptive2">{{ trans('site.brief_143') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_adaptive3" value="{{ trans('site.brief_144') }}" name="adaptive" class="custom-control-input">
                            <label class="custom-control-label" for="id_adaptive3">{{ trans('site.brief_144') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_other_goal">{{ trans('site.brief_145') }}</label>
                            <textarea name="other_goal" rows="4" class="form-control" placeholder="{{ trans('site.brief_146') }}">{{ old('other_goal') }}</textarea>
                            <?php if ($errors->has('other_goal')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('other_goal')?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <br/><h4 class="text-center text-design2">{{ trans('site.Structura_site') }}</h4>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_razdels">{{ trans('site.brief_147') }}</label>
                            <textarea name="razdels" rows="4" class="form-control" placeholder="{{ trans('site.brief_148') }}">{{ old('razdels') }}</textarea>
                            <?php if ($errors->has('razdels')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('razdels')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_navigation">{{ trans('site.brief_149') }}</label>
                            <textarea name="navigation" rows="4" class="form-control" placeholder="{{ trans('site.brief_150') }}">{{ old('navigation') }}</textarea>
                            <?php if ($errors->has('navigation')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('navigation')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_blocks">{{ trans('site.brief_151') }}</label>
                            <textarea name="blocks" rows="4" class="form-control" placeholder="{{ trans('site.brief_152') }}">{{ old('blocks') }}</textarea>
                            <?php if ($errors->has('blocks')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('blocks')?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <br/><h4 class="text-center text-design2">{{ trans('site.Design_site') }}</h4>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_design_like">{{ trans('site.brief_153') }}</label>
                            <textarea name="design_like" rows="4" class="form-control" placeholder="{{ trans('site.brief_154') }}">{{ old('design_like') }}</textarea>
                            <?php if ($errors->has('design_like')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('design_like')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_design_nolike">{{ trans('site.brief_155') }}</label>
                            <textarea name="design_nolike" rows="4" class="form-control" placeholder="{{ trans('site.brief_156') }}">{{ old('design_nolike') }}</textarea>
                            <?php if ($errors->has('design_nolike')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('design_nolike')?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_157') }}</h4>
                        </p>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="style[]" value="1" @if(is_array(old('style')) && in_array(1, old('style'))) checked @endif class="custom-control-input" id="id_style1">
                            <label class="custom-control-label" for="id_style1">{{ trans('site.brief_158') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="style[]" value="2" @if(is_array(old('style')) && in_array(2, old('style'))) checked @endif class="custom-control-input" id="id_style2">
                            <label class="custom-control-label" for="id_style2">{{ trans('site.brief_159') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="style[]" value="3" @if(is_array(old('style')) && in_array(3, old('style'))) checked @endif class="custom-control-input" id="id_style3">
                            <label class="custom-control-label" for="id_style3">{{ trans('site.brief_160') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="style[]" value="4" @if(is_array(old('style')) && in_array(4, old('style'))) checked @endif class="custom-control-input" id="id_style4">
                            <label class="custom-control-label" for="id_style4">{{ trans('site.brief_161') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="style[]" value="5" @if(is_array(old('style')) && in_array(5, old('style'))) checked @endif class="custom-control-input" id="id_style5">
                            <label class="custom-control-label" for="id_style5">{{ trans('site.brief_162') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="style[]" value="6" @if(is_array(old('style')) && in_array(6, old('style'))) checked @endif class="custom-control-input" id="id_style6">
                            <label class="custom-control-label" for="id_style6">{{ trans('site.brief_163') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="style[]" value="7" @if(is_array(old('style')) && in_array(7, old('style'))) checked @endif class="custom-control-input" id="id_style7">
                            <label class="custom-control-label" for="id_style7">{{ trans('site.brief_164') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="style[]" value="8" @if(is_array(old('style')) && in_array(8, old('style'))) checked @endif class="custom-control-input" id="id_style8">
                            <label class="custom-control-label" for="id_style8">{{ trans('site.brief_165') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="style[]" value="9" @if(is_array(old('style')) && in_array(9, old('style'))) checked @endif class="custom-control-input" id="id_style9">
                            <label class="custom-control-label" for="id_style9">{{ trans('site.brief_166') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_167') }}</h4> <br/>
                        </p>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_design1" value="{{ trans('site.brief_168') }}" name="design" class="custom-control-input">
                            <label class="custom-control-label" for="id_design1">{{ trans('site.brief_168') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_design2" value="{{ trans('site.brief_169') }}" name="design" class="custom-control-input">
                            <label class="custom-control-label" for="id_design2">{{ trans('site.brief_169') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_design3" value="{{ trans('site.brief_170') }}" name="design" class="custom-control-input">
                            <label class="custom-control-label" for="id_design3">{{ trans('site.brief_170') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_design4" value="{{ trans('site.brief_171') }}" name="design" class="custom-control-input">
                            <label class="custom-control-label" for="id_design4">{{ trans('site.brief_171') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_design5" value="{{ trans('site.brief_172') }}" name="design" class="custom-control-input">
                            <label class="custom-control-label" for="id_design5">{{ trans('site.brief_172') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_design6" value="{{ trans('site.brief_173') }}" name="design" class="custom-control-input">
                            <label class="custom-control-label" for="id_design6">{{ trans('site.brief_173') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_174') }}</h4> <br/>
                        </p>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_foto1" value="{{ trans('site.brief_175') }}" name="fotos" class="custom-control-input">
                            <label class="custom-control-label" for="id_foto1">{{ trans('site.brief_175') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_foto2" value="{{ trans('site.brief_176') }}" name="fotos" class="custom-control-input">
                            <label class="custom-control-label" for="id_foto2">{{ trans('site.brief_176') }}</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="id_foto3" value="{{ trans('site.brief_177') }}" name="fotos" class="custom-control-input">
                            <label class="custom-control-label" for="id_foto3">{{ trans('site.brief_177') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_design_other">{{ trans('site.brief_178') }}</label>
                            <textarea name="design_other" id="id_design_other" rows="4" class="form-control" placeholder="{{ trans('site.brief_179') }}">{{ old('design_other') }}</textarea>
                            <?php if ($errors->has('design_other')): ?>
                            <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('design_other')?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <br/><h4 class="text-center text-design2">{{ trans('site.Content_and_dop_services') }}</h4>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_180') }}</h4>
                        </p>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="zacontent[1]" class="custom-control-input" id="id_content1">
                            <label class="custom-control-label" for="id_content1">{{ trans('site.brief_181') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="zacontent[2]" class="custom-control-input" id="id_content2">
                            <label class="custom-control-label" for="id_content2">{{ trans('site.brief_182') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="zacontent[3]" class="custom-control-input" id="id_content3">
                            <label class="custom-control-label" for="id_content3">{{ trans('site.brief_183') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="zacontent[4]" class="custom-control-input" id="id_content4">
                            <label class="custom-control-label" for="id_content4">{{ trans('site.brief_184') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_185') }}</h4>
                        </p>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="dop[1]" class="custom-control-input" id="id_dop1">
                            <label class="custom-control-label" for="id_dop1">{{ trans('site.brief_186') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="dop[2]" class="custom-control-input" id="id_dop2">
                            <label class="custom-control-label" for="id_dop2">{{ trans('site.brief_187') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="dop[3]" class="custom-control-input" id="id_dop3">
                            <label class="custom-control-label" for="id_dop3">{{ trans('site.brief_188') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="dop[4]" class="custom-control-input" id="id_dop4">
                            <label class="custom-control-label" for="id_dop4">{{ trans('site.brief_189') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="dop[5]" class="custom-control-input" id="id_dop5">
                            <label class="custom-control-label" for="id_dop5">{{ trans('site.brief_190') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="dop[6]" class="custom-control-input" id="id_dop6">
                            <label class="custom-control-label" for="id_dop6">{{ trans('site.brief_191') }}</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="dop[7]" class="custom-control-input" id="id_dop7">
                            <label class="custom-control-label" for="id_dop7">{{ trans('site.brief_192') }}</label>
                        </div>
                        <br/><br/>
                    </div>

                    <div class="col-md-6">
                        <p class="text-center text-justify">
                            <h4>{{ trans('site.brief_193') }}</h4> <br/>
                            {{ trans('site.brief_194') }}
                        </p>
                        <div class="form-group">
                            <label for="id_file">{{ trans('site.brief_195') }}</label>
                            <input type="file" name="tzfile" class="form-control-file" id="id_file" />
                        </div>
                        <br/><br/><br/>
                    </div>
                </div>

                <div class="row">
                    <div class="text-center col-md-12 alert alert-secondary" role="alert">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" checked class="custom-control-input" id="id_soglasen">
                            <label class="custom-control-label" for="id_soglasen">{{ trans('site.brief_rules') }}
                                <a href="" class="a-green">{{ trans('site.brief_link') }}</a>.</label>
                            <br/><br/>
                        </div>
                        <!--p class="text-center">
                            <br/>
                            Нажимая кнопку "Отправить бриф", я даю согласие на обработку персональных данных в
                            соответствии с <a href="" class="a-green">политикой конфиденциальности</a>
                        </p-->
                        <input type="submit" class="btn btn-success text-center btn-lg" value="{{ trans('site.send_brief') }}" /> <br/>
                        <p class="text-center">
                            <br/>
                            {{ trans('site.brief_info_third') }}
                        </p>
                    </div>
                </div>
                <br/><br/>
            </form>

            <div class="row">
                <div class="text-center col-md-12">
                    <h4>{{ trans('site.brief_196') }}</h4>
                    <p class="text-center">
                        <span class="a-green">{{ trans('site.brief_197') }}</span>
                        <br/><br/>
                        {{ trans('site.brief_city1') }} <br/>
                        {{ trans('site.brief_email1') }}
                    </p>
                </div>
            </div>

        </div>
    </div>

@endsection
