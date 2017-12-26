<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <style type="text/css" href="{{url('chosen/chosen.css')}}"></style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
    .navbar{
        margin-bottom: 5px;
    }

    .box{
        background: #f1f1f1 !important;
        position:relative;
        float: left;
        border-radius: 5px;
        padding: 10px;
    }
    input[type=search]{
        width: 100%;
        border-radius: 5px;
        height: 30px;
        border: none;
        box-shadow: none;
        padding: 10px;
        border: 2px solid rgb(239, 207, 51) !important;
    }
    .paginate_button{
        margin-top: 10px;
        padding: 5px;
        background:  rgb(239, 207, 51);
        border: 1px solid #777;
        color:#222;
    }
    .dataTables_paginate{
        margin-top: 10px;

    }

    .dataTables_filter label{
        width: 100%;
        margin-top: 10px;


    }
</style>
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous">
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript"   src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style rel="stylesheet"  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></style>


<style type="text/css">
.btn-primary{
    background: rgb(239, 207, 51) !important;
    border-color: #7777;
}

</style>
<link rel="stylesheet" type="text/css" href="{{url('chosen_v1.8.2/chosen.css')}}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class=""><a href="{{url('home')}}">Maps View</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">KTP <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="{{url('ktp')}}">Show Table</a></li>
                            <li><a href="{{url('ktp/create')}}">Add New</a></li>
                           
                        </ul>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')
</div>

<!-- Scripts -->


<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{url('chosen/chosen.jquery.min.js')}}"></script>

<script type="text/javascript">
    
      $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
      });
    

    function createChosen(){
         $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
    }
</script>

</body>
</html>
