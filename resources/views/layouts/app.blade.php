<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- meta title -->
  @include('includes.web_includes.meta_title')

  <!-- all links -->
  @include('includes.web_includes.links')
   
</head>
<body>
    <div id="app">
        @include('includes.web_includes.navbar')

<main >
  <div class="site-wrap">
            @yield('content')
  </div>
</main>
    </div>

                <!-- footer -->
  @include('includes.web_includes.footer')

               <!-- All Scripts -->
@include('includes.web_includes.scripts')


</body>
</html>
