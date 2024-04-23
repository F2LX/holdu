<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    {{-- Import Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Import HoldU CSS --}}
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">

    {{-- Preconnect Poppins from Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="kotak">
      <div class="container d-flex justify-content-center">
        <div class="sm-row-box align-items-center mt-5 rounded">
          <div class="kotak-login-2">
            <img src="img/Rectangle 10.png"  alt="" class="rounded login-pic">
          </div>
          <div class="kotak-login">
            <h2 class="fw-bold text-center text-light mb-5">Login</h2>
              <form class="form-login">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label text-light">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                {{-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <p class="fw-bold text-light text-end">Forgot your passsword?</p>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <p class="ms-5 mt-2 text-light">Already have an account? <a href="#" class="ms-1 text-light text-decoration-none fw-bold">Register now!</a></p>  
              </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>