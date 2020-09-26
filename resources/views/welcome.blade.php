<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ertu's Personal Website</title>

    <link href="{{'css/style.css'}}" rel="stylesheet">
    <link href="{{'css/pageTransition.css'}}" rel="stylesheet">
</head>
<body>

<div class="loader" style="display: none">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    <div class="bar4"></div>
    <div class="bar5"></div>
    <div class="bar6"></div>
</div>

<a href="#" class="welcome">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Hi I'm Ertugrul,<br> please enter my website
</a>
<a href="{{url('/Index')}}" class="btn">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Enter
</a>
</body>
</html>