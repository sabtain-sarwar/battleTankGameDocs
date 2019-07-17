@extends('layouts.admin')

@section('content')

    <h1 style="margin-bottom: 2rem">Table of Content</h1>

    <table class='table'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Body</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($contents) <!-- if the post variable exists -->
        @foreach($contents as $content) <!-- taking the object out of there -->
        <tr>
            <td>{{$content->id}}</td>
            <td><a href="{{route("content.edit",$content->id)}}">{{$content->title}}</a></td>
            <td>{{$content->user->name}}</td>
            <td>{!! Str::limit($content->body,15) !!}</td>
            <td>{{$content->created_at->diffForHumans()}}</td>
            <td>{{$content->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>

    {{--    <div class="row">--}}
    {{--        <div class="col-sm-6 col-sm-offset-6">--}}
    {{--            {{$posts->render()}} --}}{{-- we use a global function render here --}}
    {{--        </div>--}}
    {{--    </div>--}}

@stop