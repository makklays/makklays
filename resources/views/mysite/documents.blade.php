@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('site.Documents') }}</h2>
                <span>{{ trans('site.List_documents_descr') }}</span>
                <br/><br/>
            </div>

            <div class="col-md-12">
                <a href="/documents/dogovor.doc" class="a-green">{{ trans('site.Tipical_dogovor') }} (doc)</a> <br/>
                <a href="/documents/dogovor2.doc" class="a-green">{{ trans('site.Tipical_dogovor') }} (doc)</a> <br/><br/>

                <a href="/briefs/Brief_na_razrabotku_sayta.docx" class="a-green">{{ trans('site.Brief_on_development_site') }} - ru</a> <br/>
                <a href="/briefs/Brief_resumen_de_desarrollo.docx" class="a-green">{{ trans('site.Brief_on_development_site') }} - es</a> <br/>
                <a href="/briefs/Brief_for_development_site.docx" class="a-green">{{ trans('site.Brief_on_development_site') }} - en</a> <br/><br/>

            </div>
        </div>
    </div>

@endsection
