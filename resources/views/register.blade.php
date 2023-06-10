@extends('layouts.before-login')

@section('title', 'Register')

@section('content')
<section class="vh-auto apply-background">
    <div class="container h-auto">
        <div class="row d-flex justify-content-center align-items-center h-auto">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 50px; margin: 4rem">
            <div class="card-body p-md-5">
                <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1">

                    <p class="text center h1 fw-bold mb-5 mx-1 mx-md-10 mt-4">Register Account</p>

                    <form class="mx-1 mx-md-4" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Your Name</label>
                            <input type="text" id="form3Example1c" class="form-control"  name="name" value="{{ old('name') }}"/>

                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="typeNIM">Your NIM</label>
                            <input type="text" id="typeNIM" class="form-control" name="student_id" value="{{ old('student_id') }}"/>
                            @error('student_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-Fac" for="typeFac">Your Faculty</label>
                            <select class="form-select flex-fill mb-0" name="faculty" >
                                <option>        </option>
                                <option {{ old('jurusan') == 'Faculty of Economics and Communication' ? 'selected' : '' }}>
                                    Faculty of Economics and Communication
                                </option>
                                <option {{ old('jurusan') == 'Faculty of Engineering' ? 'selected' : '' }}>
                                    Faculty of Engineering
                                </option>
                                <option {{ old('jurusan') == 'Faculty of Computing, Multimedia and Technology' ? 'selected' : '' }}>
                                    Faculty of Computing, Multimedia and Technology
                                </option>
                                <option {{ old('jurusan') == 'Faculty of Humanities' ? 'selected' : '' }}>
                                    Faculty of Humanities
                                </option>
                                <option {{ old('jurusan') == 'School of Information Systems' ? 'selected' : '' }}>
                                    School of Information Systems
                                </option>
                                <option {{ old('jurusan') == 'School of Computer Science' ? 'selected' : '' }}>
                                    School of Computer Science
                                </option>
                                <option {{ old('jurusan') == 'School of Design' ? 'selected' : '' }}>
                                    School of Design
                                </option>
                                <option {{ old('jurusan') == 'Binus Business School' ? 'selected' : '' }}>
                                    Binus Business School
                                </option>
                            </select>

                            @error('faculty')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Your Email</label>
                            <input type="email" id="form3Example3c" class="form-control" name="email" value="{{ old('email') }}"/>

                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Password</label>
                            <input type="password" id="password" class="form-control" name="password"/>

                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4cd">Confirm your password</label>
                            <input type="password" id="confirm" class="form-control" name="password_confirmation"/>
                        </div>
                    </div>

                    <div class="form-check d-flex justify-content-left mb-5">
                        <input class="form-check-input me-2" type="checkbox" value="{{ old('checkbox') }}" id="checkbox"/>
                        <label class="form-check-label" for="form2Example3">
                            <a href="#!">I agree to the Terms and Conditions</a>
                        </label>
                        @error('checkbox')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>

                    <div class="d-flex justify-content-center">
                        <p>Already have an account? <a href="/login"> Log in Here</a></p>
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
@endsection

