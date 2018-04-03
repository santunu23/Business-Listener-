@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard<a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>
                <div class="panel-body">
                    {!! Form::open(['action'=>'ListingsController@store','method'=>'POST'])!!}
                    {{ Form::bsText('name','',['placeholder'=>'Company Name : ']) }}
                    {{ Form::bsText('address','',['placeholder'=>'Company Address : ']) }}
                    {{ Form::bsText('website','',['placeholder'=>'Company website : ']) }}
                    {{ Form::bsText('email','',['placeholder'=>'Company Email : ']) }}
                    {{ Form::bsText('phone','',['placeholder'=>'Contact Phone : ']) }}
                    {{  Form::bsTextArea('bio','',['placeholder'=>'Company"s Bio : ']) }}
                    {{ Form::bsSubmit('submit') }}
                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
@endsection
