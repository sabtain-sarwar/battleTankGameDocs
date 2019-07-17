<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 project documentation theme for developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/docs.css')}}">

</head>

<body class="body-green">
<div class="page-wrapper">
    <!-- ******Header****** -->
    <header id="header" class="header">
        <div class="container">
            <div class="branding">
                <h1 class="logo">
                    <a href="docs">
                        <span aria-hidden="true" class="icon_documents_alt icon fa fa-book-open"></span>
                        <span class="text-highlight">Game</span><span class="text-bold">Docs</span>
                    </a>
                </h1>
            </div><!--//branding-->

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active">Quick Start</li>
            </ol>
        </div><!--//container-->
    </header><!--//header-->

    <div class="doc-wrapper">
        <div class="container">
            <div id="doc-header" class="doc-header text-center">
                <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Quick Start</h1>
{{--                <div class="meta"><i class="far fa-clock"></i> Last updated: July 18th, 2018</div>--}}
            </div><!--//doc-header-->
            <div class="doc-body row">
                <div class="doc-content col-md-9 col-12 order-1">
                    <div class="content-inner">
                        <section id="download-section" class="doc-section">
                            @if('pages')
                                @foreach($pages as $page)
                            <h2 class="section-title" ID="{!! $page->title !!}">{!! $page->title !!}</h2>
                                {!! $page->body !!}
                                    <div class="row">
                                        <div class="container-fluid" style="width: 100px">
                                            {{$pages->render()}} {{-- we use a global function render here --}}
                                        </div>
                                    </div>

                        </section><!--//doc-section-->
                        @endforeach
                        @endif
                    </div><!--//content-inner-->
                </div><!--//doc-content-->
                <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                    <div id="doc-nav" class="doc-nav">
{{--                        @if($contents)--}}
{{--                            @foreach($contents as $content)--}}
{{--                        <nav class="nav-bar">--}}
{{--                            <label for="toggle" class="nav-bar__label">Menu</label>--}}
{{--                            <input type="checkbox" id="toggle" class="nav-bar__toggle">--}}
{{--                            <ul class="nav-bar__list">--}}
{{--                                <li class="nav-bar__list-item" style="width: 100%">--}}
{{--                                    <label for="toggle-sub-1" class="nav-bar__sub-label" style="margin-bottom: 0">{!! $content->title !!}</label>--}}
{{--                                    <input type="checkbox" id="toggle-sub-1" class="nav-bar__toggle">--}}
{{--                                    <ul class="nav-bar__list">--}}
{{--                                        <li class="nav-bar__list-item">--}}
{{--                                            <a href="#" class="nav-bar__link">{!! $content->body !!}</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
                        <nav id="doc-menu" class="nav doc-menu flex-column ">
                            @if($contents)
                                @foreach($contents as $content)
                            <li style="list-style-type: none"> <a class="nav-link scrollto" href="#{!! $content->title !!}"><b>{!! $content->title !!}</b></a></li>
                            <nav class="doc-sub-menu nav flex-column">
                                <a class="nav-link scrollto" href="#step1">{!! $content->body !!}</a>
                            </nav><!--//nav-->
                        </nav><!--//doc-menu-->
                            @endforeach
                        @endif
                    </div>

                </div><!--//doc-sidebar-->

            </div><!--//doc-body-->

        </div><!--//container-->

    </div><!--//doc-wrapper-->

</div><!--//page-wrapper-->


{{--{{$pages->render()}}--}}


    <div class="col-sm-6 col-sm-offset-6">

    </div>


<footer id="footer" class="footer text-center">
    <div class="container">
        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
        <small class="copyright">Designed with <i class="fas fa-heart"></i> by Sabtain Sarwar, Mubashir Sajjaid and Jahanghir Yasin </small>

    </div><!--//container-->
</footer><!--//footer-->

<script type="text/javascript" src="{{asset('js/docs.js')}}"></script>

</body>
</html>

