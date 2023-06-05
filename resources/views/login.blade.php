<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BiFestment || Login</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

</head>
<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="navbar-brand" href="#" >
            <img src="{{ URL::asset('assets/BiFestment-Logo.png') }}" width="160px" alt="">
        </div>
        <div class="slogan fs-3 fw-semibold" style="padding-top: 0.8rem">| Invest in Yourself</div>

        <!-- <label for="check" class="bar">
            <span class="fa fa-bars" id="bars"></span>
            <span class="fa fa-times" id="times"></span>
        </label> -->
    </nav>

    <div class="apply-background">
        {{-- content --}}
        <div class="content">
            <div class="container-lg pt-5 pb-5 white text-white">
                <h1 class="display-6 bold" style="font-weight: 600">Welcome To Bifestment</h1>
                <p class="lead" style="font-weight: 400">
                    Bifestment is a dedicated platform that provides courses
                    and webinars arranged for Binusian.
                </p>
            </div>

            <div class="form-container text-white">
              <form class="container-lg row">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" placeholder="example@binus.ac.id"/>
                    <label class="form-label" for="email">Binusian Email</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" placeholder="min. consists 8 characters"/>
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <!-- 2 column grid layout for inline styling -->
                  <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                      <!-- Checkbox -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="remember-me" checked />
                        <label class="form-check-label" for="remember-me"> Remember me </label>
                      </div>
                    </div>

                    <div class="col">
                      <!-- Simple link -->
                      <a class="link-light" href="#!">Forgot password?</a>
                    </div>
                  </div>

                  <!-- Submit button -->
                  <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>Not a member? <a class="link-light" href="#!">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
