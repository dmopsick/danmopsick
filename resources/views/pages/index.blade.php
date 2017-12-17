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
      <p class="about-text">
       I'm a sophomore at Marist College in Poughkeepsie, NY majoring in Computer Science and minoring in Cybersecurity. At Marist I'm the lead developer of the Student Government IT Council and a Web Developer at the Marist College Library. Away from the computer I love to play basketball, read, and explore the great outdoors (like in this picture taken by my brother). I'm interested in finance and passionate about building beautiful and funcitonal websites.
      </p>
    </div>
    <a class="white-btn btn-component action-btn" href="#projects">Check out my Work!</a>
  </div>
  <div id="projects" class="section">

  </div>
  <div id="contact" class="section">

  </div>

@endsection

@section ('js')

@endsection
