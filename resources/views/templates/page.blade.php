@include ('partials.imports')
@yield ('css')
@include ('partials.nav_bar')

<body>
  <div class="my-container">
    @yield ('content')

    @include ('partials.footer')

  </div>
</body>
@yield ('js')
