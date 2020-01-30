<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">@yield('nama')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/crud">Home</a>
                </li>
                <!-- <li class="nav-item"> -->
                <!-- <a class="nav-link" href="#">Features</a> -->
                <!-- </li> -->
                <!-- <li class="nav-item"> -->
                <!-- <a class="nav-link" href="#">Pricing</a> -->
                <!-- </li> -->
                <!-- <li class="nav-item"> -->
                <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
                <!-- </li> -->
            </ul>
        </div>
    </nav>


    @yield('content')


</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>


</html>