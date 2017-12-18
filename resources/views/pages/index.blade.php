@extends ('templates.page')

@section ('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/index.css') }}"/>
@endsection

@section ('content')
  <div class="section landing-section photo-background">
    <a class="white-btn btn-component landing-action-btn" href="#about">Nice to Meet You!</a>
  </div>
  <div id="about" class="section about-section photo-background">

    <div class="about-text-container">
      <div class="about-column">
        <h3 class="about-header" id="who">Who am I? <span class="caret"></span></h3>
        <div class="about-text">
          <ul>
            <li>I'm a Sophomore at Marist College majoring in Computer Science, Minoring in Cybersecurity</li>
            <li>I was born and raised in Monmouth County, New Jersey</li>
            <li>I'm passionate about building functional and beautiful websites</li>
          </ul>
        </div>
      </div>

      <div class="about-column">
        <h3 class="about-header" id="what">What do I do? <span class="caret"></span></h3>
        <div class="about-text">
          <ul>
            <li>I develop and maintain the Marist Student Government Website and other services as Lead Developer of the Marist SGA IT Council</li>
            <li>I maintain existing services and develop new services for the Marist College Library as a web developer for the Marist Archives</li>
            <li>I built the DIY Guides feature for Carponents, Inc as an intern during the Summer of 2017</li>
          </ul>
        </div>
      </div>

      <div class="about-column">
        <h3 class="about-header" id="likes">What do I like? <span class="caret"></span></h3>
        <div class="about-text">
          <ul>
            <li>Exploring the great outdoors (as pictured)</li>
            <li>Playing and watching basketball (Go Knicks)</li>
            <li>Reading, particularly about World War II and ancient Rome</li>
          </ul>
        </div>
      </div>
    </div>
    <a class="white-btn btn-component action-btn" href="#projects">Check out my Work!</a>
  </div>
  <div id="projects" class="section">

  </div>
  <div id="contact" class="section">

  </div>

@endsection

@section ('js')
  <script src="{{ URL::asset('js/about.js') }}"></script>
@endsection
