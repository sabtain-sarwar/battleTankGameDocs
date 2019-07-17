@extends('layouts.admin')

@section('content')

    <h1 style="margin-bottom: 2rem">Page</h1>

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
        @if($pages) <!-- if the post variable exists -->
        @foreach($pages as $page) <!-- taking the object out of there -->
        <tr>
            <td>{{$page->id}}</td>
            <td><a href="{{route("page.edit",$page->id)}}">{{$page->title}}</a></td>
            <td>{{$page->user->name}}</td>
            <td>{!! Str::limit($page->body,15) !!}</td>
            <td>{{$page->created_at->diffForHumans()}}</td>
            <td>{{$page->updated_at->diffForHumans()}}</td>
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