@extends('layouts.admin')

@section('content')
    @include('includes.tinyeditor')

    <h1>Edit Page</h1>

    <div class="row">

        <div class="col-lg-12">

            {!! Form::model($page, ['method' =>'PATCH','action'=>['AdminPageController@update', $page->id], 'files'=>true]) !!}
            <div class='form-group'>
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null ,['class'=>'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null ,['class'=>'form-control','rows'=>10]) !!}
            </div>

            <div class='form-group'>
                {!! Form::submit('Update Page', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        @include('includes.form-error')
    </div>


@stop