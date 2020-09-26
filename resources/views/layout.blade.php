<div id="particles-js"></div>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->


<!--------- NavBar ----------->

<nav>
    <ul class="nav-links">
        <li><a href="{{url('/Index')}}">Home</a></li>
        <li class="devider">|</li>
        <li><a href="{{url('/About  ')}}">About</a></li>
        <li class="devider">|</li>
        <li><a href="#">Projects</a></li>
        <li class="devider">|</li>
        <li><a href="#">Skills</a></li>
        <li class="devider">|</li>
        <li><a href="#">Contact</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>

<script type="text/javascript" src="{{ asset('js/navbar_slide.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/particles.js') }}"></script>
