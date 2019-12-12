
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post  - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('css/blog-post.css')}}" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Asier Fernandez</a>
      <img src="http://placehold.it/40x40">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" style="display:inline-block">Home
              <span class="sr-only" >(current)</span>
            </a>
            <a class="nav-link" href="{{route('login')}}" style="display:inline-block">Login
            </a>
            <a class="nav-link" href="{{route('register')}}" style="display:inline-block">Register
            </a>
            <a href="{{ url('/logout') }}"> logout </a>
            <a class="dropdown-item" href="{{route('post.index')}}">Posts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@yield('content')


    <!-- Footer -->
    <footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Desarrollo web en entorno servidor 2020</p>
    </div>
    <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

</body>

</html>
