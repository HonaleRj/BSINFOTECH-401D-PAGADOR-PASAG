<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Midterm 401D</title>
    <style>
      .navbar-custom {
        background-color: #212121; 
      }
      .navbar-brand {
        font-family: 'Poppins', sans-serif;
        font-weight: 600; 
      }
      .navbar-thin {
        background-color: #929292;
        padding: 0.5rem 1rem;
      }
    </style>
  </head>
  <body class="bg-dark text-light">
    <nav class="navbar navbar-expand navbar-dark navbar-custom">
      <div class="container-fluid">
        <a href="/" class="navbar-brand text-light mx-auto">PAGADOR-PASAG</a>
      </div>
    </nav>
    <nav class="navbar navbar-expand navbar-light navbar-thin">
      <div class="container">
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row">
        @if($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show">
            <strong>Success! </strong>{{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        @endif

        @yield('main')
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
