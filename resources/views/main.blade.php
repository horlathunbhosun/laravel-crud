<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title> CRUD OPERATION</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

{{--    <link rel="stylesheet" href="{{asset('css/toastr.css')}}" type="text/css">--}}
    @toastr_css



</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#"></a></li>

        </ul>

{{--        <ul id="nav-mobile" class="sidenav">--}}
{{--            <li><a href="#">Menu</a></li>--}}
{{--        </ul>--}}
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

{{--{!! app('toastr')->render() !!}--}}
<div class="container">
    <div class="section">

        @yield('base')
    </div>
    <br><br>

</div>



<!--  Scripts-->
{{--<script  src="{{ asset('js/toastr.js') }}"></script>--}}
{{--<script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>--}}

</body>
@jquery
@toastr_js
@toastr_render
<script src="{{asset('js/materialize.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>
</html>
