@extends('layout.master')

@section('content')
    {{ Form::open(['url' => '\contact', 'files' => true]) }}
    {{ Form::label('name','使用者名稱',['id'=>'name']) }}
    {{ Form::text('name','無名氏') }}
    {{ Form::close() }}
@stop