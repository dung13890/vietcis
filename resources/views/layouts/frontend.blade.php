<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', $configs->title) </title>
    <meta property="og:title" content="@yield('title', $configs->title)" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="@yield('description', $configs->description)">
    <meta name="keywords" content="@yield('keywords', $configs->keywords)">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="/fav.png"/>
    <meta property="og:url" content="{{Request::url()}}" />
    @section('head-append')
        @include('frontend._partials.head')
    @show
</head>
    <body>
        <div class="boxed-container">
            @include('frontend._partials.header')
            @section('page-banner')
            @show

            @section('page-content')
            @show
            
            @include('frontend._partials.footer')
        </div>

        @section('body-append')
            @include('frontend._partials.foot')
        @show
    </body>

</html>
