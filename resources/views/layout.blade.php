<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Maste</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-default">
        	<div class="container-fluid">
        		<div class="navbar-header">
                    @if (Auth::guest())
                        <a class="navbar-brand" href="/auth/login">maste</a>
                    @else
                        <a class="navbar-brand" href="{{ url("mastes") }}">maste</a>
                    @endif
        		</div>

        		<div class="collapse navbar-collapse" id="navbarEexample1">
                    @if (!Auth::guest())
        			<ul class="nav navbar-nav">
        				<li><a href="{{ url("mastes") }}">list</a></li>
        				<li><a href="#">icon</a></li>
        				<li><a href="{{ url("mastes/create") }}">new</a></li>
                        <li><a href="{{ url("option") }}">option</a></li>
                        <li><a href="{{ url("download-excel") }}">download</a></li>
        			</ul>
                    @endif

                    {{-- 右寄せメニュー --}}
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="/auth/login">Login</a></li>
                            <li><a href="/auth/register">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/auth/logout">Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
        		</div>
        	</div>
        </nav>

        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
        @endif

        {{-- エラーの表示を追加 --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
