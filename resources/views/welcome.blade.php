<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <section>
                    <div class="cut cut-top"></div>
                    <div class="container">
                        <div class="row intro-tables">
                            <div class="col-md-6">
                                <div class="intro-table intro-table-hover">
                                    <h3 class="white heading hide-hover">EVENTOS</h3>
                                    <div class="bottom">
                                        <h4 class="white heading small-heading no-margin regular">Busca tu evento</h4>
                                        <h4 class="white heading small-pt">y regístrate</h4>
                                        <a href="{{ url('Eventos') }}" class="btn btn-white-fill expand">VER EVENTOS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="intro-table intro-table-hover">
                                    <h3 class="white heading hide-hover">CUPONES</h3>
                                    <div class="bottom">
                                        <h4 class="white heading small-heading no-margin regular">Busca tu cupón</h4>
                                        <h4 class="white heading small-pt">y obténlo</h4>
                                        <a href="{{ url('Cupones') }}" class="btn btn-white-fill expand">VER CUPONES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
