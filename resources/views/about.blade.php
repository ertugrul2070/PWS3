<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ertu's Personal Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    {{--<link href="{{'css/style.css'}}" rel="stylesheet">--}}
    <link href="{{'css/about.css'}}" rel="stylesheet">
    <link href="{{'css/particles.css'}}" rel="stylesheet">
    <link href="{{'css/navbar.css'}}" rel="stylesheet">
</head>
    <body>
        @include('layout')

        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content ">
                        <img src="{{asset('img/TCR.png')}}">
                        <h3>MBO</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content ">
                        <strong>Applicatie en Media Ontwikkeling</strong>
                        <strong>Techniek College Rotterdam</strong>
                        <strong>Rotterdam</strong>
                        <p>September 2016 - Juni 2019</p>
                        <br><br>

                    </div>
                </div>
            </div>

            <div class="card arrow">
                <div class="face face1">
                    <div class="content ">
                        <img src="{{asset('img/right-arrow.png')}}">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face face1">
                    <div class="content ">
                        <img src="{{asset('img/HR.png')}}">
                        <h3>HBO</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content ">
                        <strong>Informatica</strong>
                        <strong>Hogeschool Rotterdam</strong>
                        <strong>Rotterdam</strong>
                        <p>September 2019 - Heden</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>