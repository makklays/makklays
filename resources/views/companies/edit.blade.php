

@extends('layouts.app')

@section('content')

    <form action="" method="POST" enctype="multipart/form-data" >

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h2>Edit company</h2>
            </div>
        </div>

        {{ csrf_field() }}

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-name" class="col-md-4 col-form-label text-md-right">Name</label>
            <div class="col-md-6">
                <input id="id-name" type="text" class="form-control" name="name" value="<?=$company->name?>" required autofocus>
            </div>
        </div>

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-email" class="col-md-4 col-form-label text-md-right">E-mail</label>
            <div class="col-md-6">
                <input id="id-email" type="email" class="form-control" name="email" value="<?=(!empty($company->email) ? $company->email : '')?>" >
            </div>
        </div>

        <div class="input-group row " style="margin:5px 0 10px 0;">
            <div class="col-md-4"></div>
            <div class="col-md-6 text-center">
                <img src="<?=asset('storage/'.$company->logo.'')?>" style="width:100px;" title="Logo <?=$company->name?>" alt="not image" />
            </div>
        </div>

        <div class="input-group row " style="margin:5px 0 10px 0;">
            <div class="col-md-4"></div>
            <div class="col-md-6 text-center">
                <div class="custom-file ">
                    <input type="file" name="logo" class="col-md-4 col-form-label " id="id-logo" >
                    <label class="custom-file-label" for="id-logo">Add Logo</label>
                </div>
            </div>
        </div>

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-website" class="col-md-4 col-form-label text-md-right">Website</label>
            <div class="col-md-6">
                <input id="id-website" type="text" class="form-control" name="website" value="<?=(!empty($company->website) ? $company->website : '')?>" >
            </div>
        </div>

        <div class="form-group row mb-0" style="margin:5px 0 10px 0;">
            <div class="col-md-8 offset-md-4">
                <input type="submit" value="Edit company" class="btn btn-secondary text-center" style="margin-right:30px;" />
                <a href="{{ url('companies') }}" >{{ __('Cancel') }}</a>
            </div>
        </div>
    </form>

@endsection