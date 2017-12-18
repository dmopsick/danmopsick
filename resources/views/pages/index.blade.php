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
    <div id="sga" class="project-section">
      <a class="sga-proj-pic1 photo-background" href="https://sga.marist.edu/off-campus-activities"></a>
      <a class="sga-proj-pic2 photo-background" href="https://sga.marist.edu/foxtrot"></a>
      <a class="sga-proj-pic3 photo-background" href="https://sga.marist.edu/foxtrot"></a>
      <div class="sga-proj-desc">
        <h3 class="sga-proj-header">Marist Student Government IT Council</h3>
        <h4 class="sga-proj-subheader">Lead Developer &#183; Fall 2016 - Present</h4>

        <div class="flex-box">
          <div class="flex-box-half">
            <h4 class="sga-proj-subheader">Projects Worked On</h4>
            <ul>
              <li>Website Redesign</li>
              <li>Implementing Laravel</li>
              <li>Off Campus Activities</li>
              <li>Foxtrot</li>
              <li>Created FAQ</li>
            </ul>
          </div>
          <div class="flex-box-half">
            <h4 class="sga-proj-subheader">Duties Performed</h4>
            <ul>
              <li>Assign issues to developers</li>
              <li>Review pull requests</li>
              <li>Recruit and interview developers</li>
              <li>Hold weekly developer standups</li>
              <li>Complete issues</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="carponents" class="project-section">
      CARPONENTS PROJECT
    </div>
    <div id="library" class="project-section">
      Library Project
    </div>

    <div class="project-thumbnail sga-thumbnail" onclick="showProject('sga')">
      SGA THUMBNAIL
    </div>
    <div class="project-thumbnal carponents-thumbnail" onclick="showProject('carponents')">
      CARPONENTS THUMBNAIL
    </div>
    <div class="project-thumbnal library-thumbnail" onclick="showProject('library')">
      LBRARY THUMBNAIL
    </div>
  </div>

  <div id="contact" class="section">

  </div>

@endsection

@section ('js')
  <script src="{{ URL::asset('js/about.js') }}"></script>
  <script src="{{ URL::asset('js/projects.js') }}"></script>
@endsection
