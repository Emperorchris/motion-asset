{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}















<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In | Motion Asset</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('userdashboard/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('userdashboard/assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('userdashboard/assets/css/coinex.min862f.css?v=4.1.0') }}">
    <link rel="stylesheet" href="{{ asset('userdashboard/assets/css/custom.min862f.css?v=4.1.0') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Loader link --}}
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" media="screen">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('frontend/images/loader.svg') }}" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- loader Start -->
    {{-- <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div> --}}
    <!-- loader END -->


    <div style="background-image: url('{{ asset('userdashboard/assets/images/auth/01.png') }}')">
        <div class="wrapper">
            <section class="vh-100 bg-image">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-lg-6 col-md-8 mt-5">
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <div class="auth-form">
                                        <h2 class="text-center mb-4">Sign In</h2>

                                        {{-- @if (session()->has('error'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>{{ session('error') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif --}}
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <center>Welcome Back to Motion Assets</center>
                                            <div class="form-floating mb-3">
                                                <input type="email" name="email" class="form-control"
                                                    id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Email</label>
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input type="password" name="password" class="form-control"
                                                    id="Password" placeholder="Password">
                                                <label for="Password">Password</label>
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                                <div class="form-group mb-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="Remember">
                                                        <label class="form-check-label" for="Remember">Remember
                                                            Me?</label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5">
                                                <button type="submit" class="btn btn-primary">Sign In</button>
                                            </div>
                                            {{-- <div class="text-center mt-3">
                                                <p>or sign in with another account?</p>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <ul class="list-group list-group-horizontal list-group-flush">
                                                    <li class="list-group-item bg-transparent border-0">
                                                        <a href="#"><img
                                                                src="{{ asset('userdashboard/assets/images/brands/01.png') }}"
                                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                                alt="img60"></a>
                                                    </li>
                                                    <li class="list-group-item bg-transparent border-0">
                                                        <a href="#"><img
                                                                src="{{ asset('userdashboard/assets/images/brands/02.png') }}"
                                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                                alt="gm"></a>
                                                    </li>
                                                    <li class="list-group-item bg-transparent border-0">
                                                        <a href="#"><img
                                                                src="{{ asset('userdashboard/assets/images/brands/03.png') }}"
                                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                                alt="im"></a>
                                                    </li>
                                                    <li class="list-group-item bg-transparent border-0">
                                                        <a href="#"><img
                                                                src="{{ asset('userdashboard/assets/images/brands/04.png') }}"
                                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                                alt="li"></a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </form>
                                        <div class="new-account mt-5 text-center">
                                            <p>Don't have an account? <a href="{{ route('register') }}">Click here to
                                                    sign up</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <!-- Loader Library File -->
    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/function.js') }}"></script>


    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('userdashboard/assets/js/core/libs.min.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/core/external.min.js') }}"></script>

    <!-- widgetchart JavaScript -->
    <script src="{{ asset('userdashboard/assets/js/charts/widgetcharts.js') }}"></script>

    <!-- GSAP Animation JS -->
    <script src="{{ asset('userdashboard/assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>

    <!-- fslightbox JavaScript -->
    <script src="{{ asset('userdashboard/assets/js/fslightbox.js') }}"></script>

    <!-- Mapchart JavaScript -->
    <script src="{{ asset('userdashboard/assets/js/charts/vector-chart.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/charts/dashboard.js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('userdashboard/assets/js/coinex.js') }}"></script>

    <!-- apexchart JavaScript -->
    <script src="{{ asset('userdashboard/assets/js/charts/apexcharts.js') }}"></script>

    <!-- Gsap Animation Init -->
    <script src="{{ asset('userdashboard/assets/js/gsap.js') }}"></script>
</body>

</html>
