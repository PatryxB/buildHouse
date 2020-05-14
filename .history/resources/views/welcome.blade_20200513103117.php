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
                    <p>Lorem ipsum dolor  <br>
                    amet consectetur adipisic<br>
                    elit. Veritatis incidu, <br>
                    adipisci at id animi officii<br>
                    dolore a deleniti provide <br>
                    magni ea maiores totam corpo <br>
                    aliquam atque est nobis nesci</p>
                </div>
                <div class="info">
                    <h1>About us</h1>
                    <p>Lorem ipsum dolor  <br>
                        amet consectetur adipisic<br>
                        elit. Veritatis incidu, <br>
                        adipisci at id animi officii<br>
                        dolore a deleniti provide <br>
                        magni ea maiores totam corpo <br>
                        aliquam atque est nobis nesci</p>
                </div>
                <div class="info">
                    <h1>Start just now</h1>
                    <p>Lorem ipsum dolor  <br>
                        amet consectetur adipisic<br>
                        elit. Veritatis incidu, <br>
                        adipisci at id animi officii<br>
                        dolore a deleniti provide <br>
                        magni ea maiores totam corpo <br>
                        aliquam atque est nobis nesci</p>
                </div>
            </div>
            <br style="clear: both;">

            <div class="info-project" style="margin-top:170px;">
                <div class="project">
                    <img src="https://www.kbprojekt.pl/img/projects//1959/15403720403b1acc618b15cacde0c6438489378a5377e65b11.jpg" alt="">
                    <div class="dane">
                        <p class="p1">2777$</p>
                        <p class="p2">60m/2</p>
                        <p class="p3">Gdynia</p>
                    </div>
                </div>
                <div class="project">
                    <img src="https://apollo-ireland.akamaized.net/v1/files/eyJmbiI6ImphNTRtb3RzYnBqZjMtQVBMIiwidyI6W3siZm4iOiJqMWozbzEzbTZiZ24xLUFQTCIsInMiOiIxNCIsInAiOiIxMCwtMTAiLCJhIjoiMCJ9XX0.FLfvBjc2VHjNTxBiPmTC487stQIQEvB21KTSbJSyFAA/image;s=1280x1024;q=80" alt="">
                    <div class="dane">
                        <p class="p1">3421$</p>
                        <p class="p2">70m/2</p>
                        <p class="p3">mexic</p>
                    </div>
                </div>
                <div class="project">
                    <img src="https://apollo-ireland.akamaized.net/v1/files/eyJmbiI6InJwZTV6d2RtNHJvcDItQVBMIiwidyI6W3siZm4iOiJqMWozbzEzbTZiZ24xLUFQTCIsInMiOiIxNCIsInAiOiIxMCwtMTAiLCJhIjoiMCJ9XX0.MXVVBoSVnaFYLlkWcCmOAUNOFhgKTNpv-sx5AXkBfQM/image;s=1280x1024;q=80" alt="">
                    <div class="dane">
                        <p class="p1">2015$</p>
                        <p class="p2">70m/2</p>
                        <p class="p3">Moskwa</p>
                    </div>
                </div>
                <div class="project">
                    <img src="https://apollo-ireland.akamaized.net/v1/files/eyJmbiI6IjdkcHBiMWg1MWMyYS1BUEwiLCJ3IjpbeyJmbiI6ImoxajNvMTNtNmJnbjEtQVBMIiwicyI6IjE0IiwicCI6IjEwLC0xMCIsImEiOiIwIn1dfQ.Vn0j2ZwR7-mwdAvjUBRdMRvq4eNux8S6EjA7H_h3IlU/image;s=1280x1024;q=80" alt="">
                    <div class="dane">
                        <p class="p1">1685$</p>
                        <p class="p2">49m/2</p>
                        <p class="p3">Gdansk</p>
                    </div>
                </div>
                <div class="project">
                    <img src="https://apollo-ireland.akamaized.net/v1/files/eyJmbiI6InE3cTF1aTk5NTN3cjItQVBMIiwidyI6W3siZm4iOiJqMWozbzEzbTZiZ24xLUFQTCIsInMiOiIxNCIsInAiOiIxMCwtMTAiLCJhIjoiMCJ9XX0.gnYmfbBLUva74FwfX0ROh9igXkRTRxUvOj7uFsXxIXI/image;s=1280x1024;q=80" alt="">
                    <div class="dane">
                        <p class="p1">6789$</p>
                        <p class="p2">120m/2</p>
                        <p class="p3">LA</p>
                    </div>
                </div>
                <div class="project">
                    <img src="https://apollo-ireland.akamaized.net/v1/files/eyJmbiI6ImN2OTl0NGdtbHc3eDItQVBMIiwidyI6W3siZm4iOiJqMWozbzEzbTZiZ24xLUFQTCIsInMiOiIxNCIsInAiOiIxMCwtMTAiLCJhIjoiMCJ9XX0.Y1i7SuQuhSR27sA2xMYwlreJemYtDjT3cxlYWdXL_pk/image;s=1280x1024;q=80" alt="">
                    <div class="dane">
                        <p class="p1">2458$</p>
                        <p class="p2">60m/2</p>
                        <p class="p3">Berlin</p>
                    </div>
                </div>
            </div>

            <br style="clear: both">

            <footer>
                <ul>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                </ul>
                <ul>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                </ul>
                <ul>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                </ul>
                <ul>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                    <li>Hello</li>
                </ul>
            </footer>

        @endsection
    </body>
</html>
