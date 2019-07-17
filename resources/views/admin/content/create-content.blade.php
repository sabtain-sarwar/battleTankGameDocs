@extends('layouts.admin')

@section('content')


    @include('includes.tinyeditor')

    <h1>Create Content</h1>

    <div class="row" style="width: auto">
        <div class="col-lg-12">
            {!! Form::open(['method' =>'POST','action'=>'AdminContentController@store', 'files'=>true]) !!}
            <div class='form-group'>
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null ,['class'=>'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null ,['class'=>'form-control','rows'=>10]) !!}
            </div>

            <div class='form-group'>
                {!! Form::submit('Create Content', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        @include('includes.form-error')
    </div>


@stop