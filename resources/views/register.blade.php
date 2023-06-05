<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BiFestment || Register</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

</head>
<body>
      <section class="vh-auto apply-background">
        <div class="container h-auto">
          <div class="row d-flex justify-content-center align-items-center h-auto">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 50px; margin: 4rem">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1">

                      <p class="text center h1 fw-bold mb-5 mx-1 mx-md-10 mt-4">Register Account</p>

                      <form class="mx-1 mx-md-4">

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" class="form-control" />
                            <label class="form-label" for="form3Example1c">Your Name</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="tel" id="typeNIM" class="form-control" />
                              <label class="form-label" for="typeNIM">Your NIM</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <select class="form-select flex-fill mb-0">
                                <option>        </option>
                                <option>Faculty of Economics and Communication</option>
                                <option>Faculty of Engineering</option>
                                <option>Faculty of Computing, Multimedia and Technology</option>
                                <option>Faculty of Humanities</option>
                                <option>School of Information Systems</option>
                                <option>School of Computer Science</option>
                                <option>School of Design</option>
                                <option>Binus Business School</option>
                              </select>
                              <label class="form-Fac" for="typeFac">Your Faculty</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" class="form-control" />
                            <label class="form-label" for="form3Example3c">Your Email</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4c" class="form-control" />
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4cd" class="form-control" />
                            <label class="form-label" for="form3Example4cd">Confirm your password</label>
                          </div>
                        </div>

                        <div class="form-check d-flex justify-content-left mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                             <a href="#!">I agree of the Term and Conditions</a>
                          </label>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="button" class="btn btn-primary btn-lg">Register</button>
                        </div>

                      </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-5 d-flex align-items-center order-1 order-lg-2">

                      <img src="{{ asset('assets/BiFestment-Logo.png') }}"
                        class="img-fluid" alt="BifestLogo">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
