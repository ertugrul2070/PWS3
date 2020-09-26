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
    <link href="{{'css/Index.css'}}" rel="stylesheet">
    <link href="{{'css/particles.css'}}" rel="stylesheet">
    <link href="{{'css/navbar.css'}}" rel="stylesheet">
</head>
<body>
@include('layout')

<div class="container">
    <div class="card">
        <div class="face face1">
            <div class="content ">
                <img src="{{asset('img/Skils.png')}}">
                <h3>Code</h3>
            </div>
        </div>
        <div class="face face2">
            <div class="content ">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Morbi facilisis arcu ac congue sollicitudin.
                    In fringilla eros vel nulla iaculis euismod. Proin eleifend luctus eros,
                    a venenatis risus porttitor nec. </p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="face face1">
            <div class="content ">
                <img src="{{asset('img/AboutMe.png')}}">
                <h3>About me</h3>
            </div>
        </div>
        <div class="face face2">
            <div class="content ">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Morbi facilisis arcu ac congue sollicitudin.
                    In fringilla eros vel nulla iaculis euismod. Proin eleifend luctus eros,
                    a venenatis risus porttitor nec. </p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="face face1">
            <div class="content ">
                <img src="{{asset('img/MyWork.png')}}">
                <h3>Bruh1</h3>
            </div>
        </div>
        <div class="face face2">
            <div class="content ">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Morbi facilisis arcu ac congue sollicitudin.
                    In fringilla eros vel nulla iaculis euismod. Proin eleifend luctus eros,
                    a venenatis risus porttitor nec. </p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>