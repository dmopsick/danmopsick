<!-- Import style for nav bar -->
<link rel="stylesheet" href="{{ URL::asset('css/nav_bar.css') }}">
<!-- Import JS for nav bar -->
<script src="{{ URL::asset('js/nav_bar.js') }}"></script>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <a href="#"><img src="{{ URL::asset('img/dm_logo.png') }}" class="home-logo" /></a>
    <div class="link-container">
      <a href="#about">About <i class="fa fa-id-card" aria-hidden="true"></i></a> | <a href="#projects">Projects <i class="fa fa-briefcase" aria-hidden="true"></i></a> | <a href="#contact">Contact <i class="fa fa-envelope" aria-hidden="true"></i></a>
    </div>
  </div>
</nav>
