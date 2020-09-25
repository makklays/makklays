
@extends('layouts.app')

@section('content')

    <form action="{{ route('employee_edit', [app()->getLocale(), 'id' => $employee->id]) }}" method="POST">

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h2>{{ trans('site.Edit_employee') }}</h2>
            </div>
        </div>

        {{ csrf_field() }}

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-lastname" class="col-md-4 col-form-label text-md-right">{{ trans('site.Lastname') }}</label>
            <div class="col-md-6">
                <input id="id-lastname" type="text" class="form-control" name="lastname" value="<?=$employee->lastname?>" required autofocus>
            </div>
        </div>

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-firstname" class="col-md-4 col-form-label text-md-right">{{ trans('site.Firstname') }}</label>
            <div class="col-md-6">
                <input id="id-firstname" type="text" class="form-control" name="firstname" value="<?=$employee->firstname?>" required autofocus>
            </div>
        </div>

        <div class="input-group row mb-3" style="margin:5px 0 10px 0;">
            <label class="col-md-4 col-form-label text-md-right" for="id-company-id">{{ trans('site.Company') }}</label>
            <div class="col-md-6">
                <select name="company_id" class="custom-select" required id="id-company-id">
                    <option>{{ trans('site.Choose_company') }}</option>
                    <?php foreach($companies as $company): ?>
                        <option value="<?=$company->id?>" <?=($employee->company_id == $company->id ? 'selected="selected"' : '')?> ><?=$company->name?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-phone" class="col-md-4 col-form-label text-md-right">{{ trans('site.Phone') }}</label>
            <div class="col-md-6">
                <input id="id-phone" type="text" class="form-control" name="phone" value="<?=(isset($employee->phone) && !empty($employee->phone) ? $employee->phone : '')?>" >
            </div>
        </div>

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-email" class="col-md-4 col-form-label text-md-right">{{ trans('site.Email') }}</label>
            <div class="col-md-6">
                <input id="id-email" type="email" class="form-control" name="email" value="<?=(isset($employee->email) && !empty($employee->email) ? $employee->email : '')?>" >
            </div>
        </div>

        <div class="form-group row mb-0" style="margin:5px 0 10px 0;">
            <div class="col-md-8 offset-md-4">
                <input type="submit" value="{{ trans('site.Edit_employee') }}" class="btn btn-secondary text-center" style="margin-right:30px;" />
                <a href="{{ url('employees') }}" >{{ __('Cancel') }}</a>
            </div>
        </div>
    </form>

@endsection
