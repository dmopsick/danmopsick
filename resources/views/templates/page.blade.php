@include ('partials.imports')
@yield ('css')
@include ('partials.nav_bar')

<body>
  <div class="container-fluid">
    @yield ('content')

    @include ('partials.footer')

  </div>
</body>
@yield ('js')
