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
      <a class="sga-proj-pic1 proj-pic" href="https://sga.marist.edu/off-campus-activities"></a>
      <a class="sga-proj-pic2 proj-pic" href="https://sga.marist.edu/foxtrot"></a>
      <a class="sga-proj-pic3 proj-pic" href="https://sga.marist.edu/faq"></a>
      <div class="sga-proj-desc">
        <h3 class="proj-header">Marist Student Government IT Council</h3>
        <h4 class="sga-proj-subheader">Lead Developer &#183; Fall 2016 - Present</h4>

        <p>As lead developer I am responsible for developing, maintaining, and enhancing the SGA website. I do this by creating and assigning issues to my team of developers on GitHub and completing them myself. Once a developer completes an issue I review pull requests and give feedback or approve and merge. I connect with my fellow developers through our Slack channel and by holding weekly developer standups.</p>

        <h4 class="sga-proj-subheader">Projects</h4>
        <p>I participated in a redesign of the website in the spring of 2017 and learned a lot from the older developers. In the summer of 2017 I stepped up and played a major role in transitioning the student government website from a basic HTML site to a Laravel based site. In the fall of 2017 I worked with the student body president to launch the Foxtrot campaign. Foxtrot was a project aimed at getting first year students at Marist get involved with student government and the Marist community in general. In between I have built several pages for the site including the off campus activities page and FAQ pages. </p>

        <h4 class="sga-proj-subheader">Technology Utilized</h4>
        <p>HTML, CSS, Javascript, PHP, Laravel, Slack, Github</p>

        <div style="width:80%; margin:auto; display:flex;">
          <img src="{{ URL::asset('img/sga_logo2.png') }}" class="project-thumbnail sga-thumbnail" onclick="showProject('sga')"/>
          <img src="{{ URL::asset('img/carponents_logo.png') }}" class="project-thumbnail carponents-thumbnail" onclick="showProject('carponents')"/>
          <img src="{{ URL::asset('img/marist_logo.png') }}" class="project-thumbnail library-thumbnail" onclick="showProject('library')"/>
        </div>
      </div>
    </div>
    <div id="carponents" class="project-section">
      <div class="carponents-proj-desc">



        <div style="width:80%; margin:auto; display:flex;">
          <img src="{{ URL::asset('img/sga_logo2.png') }}" class="project-thumbnail sga-thumbnail" onclick="showProject('sga')" align="center"/>
          <img src="{{ URL::asset('img/carponents_logo.png') }}" class="project-thumbnail carponents-thumbnail" onclick="showProject('carponents')" align="center"/>
          <img src="{{ URL::asset('img/marist_logo.png') }}" class="project-thumbnail library-thumbnail" onclick="showProject('library')" align="center"/>
        </div>
      </div>
    </div>
    <div id="library" class="project-section">
      <a class="library-pic" href="http://library.marist.edu/exploro/"></a>
      <div class="library-proj-desc">
        <h3 class="proj-header">Marist Library Digital Services</h3>
        <h4 class="sga-proj-subheader">Web Developer &#183; Spring 2017 - Present</h4>

        <p>As lead developer I am responsible for developing, maintaining, and enhancing the SGA website. I do this by creating and assigning issues to my team of developers on GitHub and completing them myself. Once a developer completes an issue I review pull requests and give feedback or approve and merge. I connect with my fellow developers through our Slack channel and by holding weekly developer standups.</p>

        <h4 class="sga-proj-subheader">Projects</h4>
        <p>I participated in a redesign of the website in the spring of 2017 and learned a lot from the older developers. In the summer of 2017 I stepped up and played a major role in transitioning the student government website from a basic HTML site to a Laravel based site. In the fall of 2017 I worked with the student body president to launch the Foxtrot campaign. Foxtrot was a project aimed at getting first year students at Marist get involved with student government and the Marist community in general. In between I have built several pages for the site including the off campus activities page and FAQ pages. </p>

        <h4 class="sga-proj-subheader">Technology Utilized</h4>
        <p>HTML, CSS, Javascript, PHP, CodeIgniter, Apache Solr, XML, Github</p>

        <div style="width:80%; margin:auto; display:flex;">
          <img src="{{ URL::asset('img/sga_logo2.png') }}" class="project-thumbnail sga-thumbnail" onclick="showProject('sga')" align="center"/>
          <img src="{{ URL::asset('img/carponents_logo.png') }}" class="project-thumbnail carponents-thumbnail" onclick="showProject('carponents')" align="center"/>
          <img src="{{ URL::asset('img/marist_logo.png') }}" class="project-thumbnail library-thumbnail" onclick="showProject('library')" align="center"/>
        </div>
      </div>
    </div>
    <a class="navy-btn btn-component action-btn" href="#projects">Let's Keep in Touch!</a>
  </div>

  <div id="contact" class="section">

  </div>

@endsection

@section ('js')
  <script src="{{ URL::asset('js/about.js') }}"></script>
  <script src="{{ URL::asset('js/projects.js') }}"></script>
@endsection
