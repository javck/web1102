@extends('layout.master')

@section('content')
<div class="container">
        {{ Form::open(['url' => 'contact','class'=>"form-contact contact_form",'files' => true ]) }}
        <div class="row">
            <div class="col-sm-3">
                {{ Form::label('name','使用者名稱') }}
            </div>
            <div class="col-sm-9">
                {{ Form::text('name',null,['class'=>"form-control valid" , 'onfocus'=>"this.placeholder = ''" ,'onblur'=>"this.placeholder = 'Enter your name'" ,'placeholder'=>"Enter your name" ]) }}
            </div>
        </div>
        
        @include('contacts._form')
        {{ Form::submit('送出') }} {{ Form::reset('重設') }}
        {{ Form::close() }}
</div>

@stop