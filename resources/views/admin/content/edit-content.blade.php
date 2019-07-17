@extends('layouts.admin')

@section('content')
    @include('includes.tinyeditor')

    <h1>Edit Content</h1>

    <div class="row">

        <div class="col-lg-12">

            {!! Form::model($content, ['method' =>'PATCH','action'=>['AdminContentController@update', $content->id], 'files'=>true]) !!}
            <div class='form-group'>
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null ,['class'=>'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null ,['class'=>'form-control','rows'=>10]) !!}
            </div>

            <div class='form-group'>
                {!! Form::submit('Update Content', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}

            {{--            {!! Form::open(['method' =>'DELETE','action'=>['AdminPostsController@destroy', $post->id]]) !!}--}}
            {{--            <div class='form-group'>--}}
            {{--                {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}--}}
            {{--            </div>--}}
            {{--            {!! Form::close() !!}--}}
        </div>
    </div>

    <div class="row">
        @include('includes.form-error')
    </div>


@stop