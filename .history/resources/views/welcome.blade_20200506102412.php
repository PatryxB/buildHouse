<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>

        <section id="welcome">
            <div class="banner">
                <img src="{{asset('/img/housebanner.jpg')}}" alt="">
                <div class="text-banner">
                    <h1 style="font-size:60px">Start <span style="opacity: .4;">LIVING</span>on</h1>
                    <p style="font-size:30px">Your Own</p>
                    <button class="btn">I'm ON</button>
                </div>
            </div>
        </section>

        @extends('layouts.app')
        @section('content')

            <div class="container">
                <div class="info">
                    <h1>Why We</h1>
                    <p>Lorem ipsum dolor sit <br>
                    amet consectetur adipisicing <br>
                    elit. Veritatis incidunt, <br>
                    adipisci at id animi officiis <br>
                    dolore a deleniti provident <br>
                    magni ea maiores totam corporis <br>
                    aliquam atque est nobis nesciunt molestiae.</p>
                </div>
                <div class="info"><h1>About us</h1></div>
                <div class="info"><h1>Start just now</h1></div>
            </div>

        @endsection
    </body>
</html>
