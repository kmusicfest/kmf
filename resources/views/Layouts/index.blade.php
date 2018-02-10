<!DOCTYPE html>
<html lang="en">
     @include('partials.meta')

     @include('partials.head')
  <body>

      <!-- Navigation -->
     @include('partials.nav')

      <!-- Page Header -->
     @include('partials.header')

        <!-- Main Content -->
        <div class="container">
     @yield('content')
        </div>

          

      <!-- Footer -->
      @include('partials.footer')

      <!-- Bootstrap core JavaScript -->
      @include('partials.javascript')

  </body>

</html>
