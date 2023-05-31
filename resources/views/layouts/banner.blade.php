<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CMS</title>
<<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>


<<body>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<title>CMS</title>


<!-- MASTHEAD -->

<body>
  <!-- data-spy="scroll" data-target=".navbar" data-offset="0"> -->
  <div id="page">
    <header role="banner">
      <!-- NAVBAR -->
      <nav id="mainnavbar" class="navbar navbar-expand-md navbar-light bg-dark shadow-sm  navbar-default navbar-fixed-top" roll="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav" style="color: white;">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: white;" data-toggle="dropdown" href="#">CMS</a>
                            <div class="dropdown-menu">
                                <!-- <a class="dropdown-item" href="home1">Home</a> -->
                                <a class="dropdown-item" href="list-content">Content</a>
                                <a class="dropdown-item" href="service">Service</a>
                                <a class="dropdown-item" href="about">About</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto" style="color: white;">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: white;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </div>
      </nav>
      <div id="brand">
        <p></p>
      </div>
    </header>
    <div id="bannerimage">
      <div class="bannerWrapper">
        <div class="bannerText" style="">
            <h1>CMS</h1>
          <p>A content management system (CMS) is an application that is used to manage content, allowing multiple contributors to create, edit and publish.
             Content in a CMS is typically stored in a database and displayed in a presentation layer based on a set of templates like a website.</p>
        </div>
      </div>
    </div>
    

      <div class="container-fluid img-thumbnail">
        <div class="row">
          <img class="img-responsive col-xs-6 col-sm-3" src="/slider-image/9.jpg">
          <img class="img-responsive col-xs-6 col-sm-3" src="/slider-image/12.jpg">
          <img class="img-responsive img-responsive col-xs-6 col-sm-3" src="/slider-image/8.jpg">
          <img class="img-responsive img-responsive col-xs-6 col-sm-3" src="/slider-image/1.png">
        </div>
      </div>
    </div>
  </div>
  <div id="where">

  </div>


  <main class="py-4">
            @yield('content')
        </main>
</body>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
<script src="js/index.js"></script>

</html>