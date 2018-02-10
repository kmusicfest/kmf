<!DOCTYPE html>
<html lang="en">

     @include('partials.head')
  <body style="background-color:black">

      <!-- Navigation -->
     @include('partials.nav')

      <!-- Page Header -->


        <!-- Main Content -->
        <div class="container">
     @yield('content')
        </div>

          <hr>

      <!-- Footer -->
        <footer style="background-color: white">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; KMUSICFEST 2018</p>
          </div>
        </div>
      </div>
    </footer>

      <!-- Bootstrap core JavaScript -->
      @include('partials.javascript')

  </body>

</html>
