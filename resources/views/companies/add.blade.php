

@extends('layouts.app')

@section('content')

    <form action="" method="POST" enctype="multipart/form-data" >

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h2>Add a new company</h2>
            </div>
        </div>

        {{ csrf_field() }}

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-name" class="col-md-4 col-form-label text-md-right">Name</label>
            <div class="col-md-6">
                <input id="id-name" type="text" class="form-control" name="name" value="" required autofocus>
            </div>
        </div>

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-email" class="col-md-4 col-form-label text-md-right">E-mail</label>
            <div class="col-md-6">
                <input id="id-email" type="email" class="form-control" name="email" value="" >
            </div>
        </div>

        <!--div class="form-group row" style="margin:5px 0;">
            <label for="id-logoo" class="col-md-4 col-form-label text-md-right">Logo</label>
            <div class="col-md-6">
                <input id="id-logoo" type="file" class="form-control" name="logoo" value="" >
            </div>
        </div-->

        <div class="input-group row " style="margin:5px 0 10px 0;">
            <div class="col-md-4"></div>
            <div class="col-md-6 text-center">
                <div class="custom-file ">
                    <input type="file" name="logo" accept="image/jpeg,image/png,image/gif" class="col-md-4 col-form-label " id="id-logo" >
                    <label class="custom-file-label" for="id-logo">Add Logo</label>
                </div>
            </div>
        </div>

        <div class="form-group row" style="margin:5px 0 10px 0;">
            <label for="id-website" class="col-md-4 col-form-label text-md-right">Website</label>
            <div class="col-md-6">
                <input id="id-website" type="text" class="form-control" name="website" value="" >
            </div>
        </div>

        <div class="form-group row mb-0" style="margin:5px 0 10px 0;">
            <div class="col-md-8 offset-md-4">
                <input type="submit" value="Add company" class="btn btn-secondary text-center" />
            </div>
        </div>

    </form>

@endsection