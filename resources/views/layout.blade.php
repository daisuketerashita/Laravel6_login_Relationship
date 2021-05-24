<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Info</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <!-- END : Bootstrap -->

    </head>


    <body class="vh-100 d-flex justify-content-center text-center">
        <div class="w-75 mt-3">

            <div class="text-black-50 d-flex text-center border-bottom mt-5">

              <h1>
                <a href="{{ route('index') }}" class="text-secondary">Information</a>
              </h1>

              @if (Route::has('login'))
                <p class="mt-3">　/　</p>
                <div class="mt-3">
                  @auth
                    <a href="{{ url('/home') }}" class="text-secondary">Home</a>
                  @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}"  class="text-secondary">Register</a>
                    @endif
                  @endauth
                </div>
              @endif

            </div>

            <div>
              @yield('content')
            </div>

        </div>
    </body>

</html>