<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">


    <title>PSLC Directory | Pacesetters Leadership club</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("https://pslc.com.ng/group-pic-1.jpg") ;
            .bg-light {
    background-color: white !important;
}
        }
        .carter-one-regular {
  font-family: "Carter One", system-ui;
  font-weight: 400;
  font-style: normal;
  font-size: 60px;
  color: white;
  text-shadow: 2px 2px 13px #5c4f4e;
}



.space-grotesk-1 {
  font-family: "Space Grotesk", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  background-color: #ffffffd1;
  color: #756463;
  padding: 5px;
  border-radius: 5px;
}

    </style>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://pslc.com.ng/pslc-logo.png" height="50"/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          @if (Route::has('login'))
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          @endif
          @endauth
          @endif
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <body>
      <div class="container">

    <h1 class="carter-one-regular">Welcome to Pacesetters Leadership Club</h1>
    <h3 class="space-grotesk-1">
        Empowering Nigeria's Immigration Officers to Lead and Excel

    </h3>
    
    <h6 class="space-grotesk-1">
       Welcome to the Pace Setters Leadership Club, your premier directory and resource hub dedicated to the growth and development of Nigeria's immigration officers. Our mission is to cultivate the next generation of leaders within the service and beyond, providing the tools, guidance, and community support needed to excel both professionally and personally.
 
    </h6>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>

    
  </body>
</html>

