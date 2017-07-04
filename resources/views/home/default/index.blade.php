<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name','home')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .affiche> ol > li {
            margin-top: 25px;
            font-size: 12px;
            letter-spacing: .2rem;
            text-decoration: none;
            text-transform: uppercase;
            /*padding-top: 15px;*/
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@if (Auth::check())--}}
                {{--<a href="{{ url('/home') }}">首页</a>--}}
                {{--<a href="{{ route('logout') }}"--}}
                   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                    {{--Logout--}}
                {{--</a>--}}

                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--{{ csrf_field() }}--}}
                {{--</form>--}}
            {{--@else--}}
                {{--<a href="{{ url('/login') }}">登陆</a>--}}
                {{--<a href="{{ url('/register') }}">注册</a>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--@endif--}}

    <div class="content">

        <div class="title m-b-md">
            {{$app->name}}
        </div>

        <div class="links">
            @foreach($apps as $value)
            <a href="{{url($value->url)}}">{{$value->name}}</a>
            @endforeach
        </div>
        <div class="affiche">
            <ol type="A">
                @foreach($list as $value)
                <li>{{$value->content}}</li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
</body>
</html>
