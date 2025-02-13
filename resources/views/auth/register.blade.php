{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register | Motion Asset</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('userdashboard/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('userdashboard/assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('userdashboard/assets/css/coinex.min862f.css?v=4.1.0') }}">
    <link rel="stylesheet" href="{{ asset('userdashboard/assets/css/custom.min862f.css?v=4.1.0') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" media="screen">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('frontend/images/loader.svg') }}" alt=""></div>
        </div>
    </div>
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
                                        <h2 class="text-center mb-4">Sign Up</h2>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <p class="text-center">Join Motion Assets
                                                .</p>
                                            <div class="row">

                                                <div class="col-md-6 mb-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="firstname" class="form-control"
                                                            id="validationCustom01" placeholder="First Name">
                                                        <label for="firstName">First Name</label>
                                                        @error('firstname')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="lastname" class="form-control"
                                                            id="lastName" placeholder="Last Name">
                                                        <label for="lastName">Last Name</label>
                                                        @error('lastname')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" name="email" class="form-control"
                                                            id="floatingInput" placeholder="name@example.com">
                                                        <label for="floatingInput">Email</label>
                                                        @error('email')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="number" class="form-control"
                                                            id="phoneno" placeholder="Phone No">
                                                        <label for="phoneno">Phone No(Optional)</label>
                                                        @error('number')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="form-label" for="choices-single-default">Choose Investment
                                                    Plan</label>
                                                <select class="form-select" data-trigger="" name="account_type"
                                                    id="choices-single-default">
                                                    <option value="">Select Account Plan</option>
                                                    <option value="Basic">Basic</option>
                                                    <option value="Advanced">Advanced</option>
                                                    <option value="Premium">Premium</option>
                                                </select>
                                                @error('account_type')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-floating mb-2">
                                                        <input type="password" name="password" class="form-control"
                                                            id="" placeholder="Password"
                                                            autocomplete="new-password">
                                                        <label for="Password">Password</label>
                                                        @error('password')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-floating mb-2">
                                                        <input type="password" name="password_confirmation"
                                                            class="form-control" id="confirmpassword"
                                                            placeholder="Confirm Password">
                                                        <label for="confirmpassword">Confirm Password</label>
                                                        @error('password_confirmation')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <div class="form-floating mb-2">
                                                        <input type="text" name="referral_id" class="form-control"
                                                            id="" placeholder="" readonly>
                                                        <label for="">Referral ID(Auto Fills)</label>

                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="form-check d-flex justify-content-center mb-2">
                                                <input type="checkbox" class="form-check-input" id="agree">
                                                <label class="ms-1 form-check-label" for="agree">I agree with the terms
                                                    of use</label>
                                                    @error('')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                            </div> --}}
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                            </div>
                                            {{-- <div class="text-center mt-3">
                                                <p>or sign in with other accounts?</p>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <ul class="list-group list-group-horizontal list-group-flush">
                                                    <li class="list-group-item border-0 bg-transparent">
                                                        <a href="#"><img
                                                                src="{{ asset('userdashboard/assets/images/brands/01.png') }}"
                                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                                alt="fb"></a>
                                                    </li>
                                                    <li class="list-group-item border-0 bg-transparent">
                                                        <a href="#"><img
                                                                src="{{ asset('userdashboard/assets/images/brands/02.png') }}"
                                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                                alt="gm"></a>
                                                    </li>
                                                    <li class="list-group-item border-0 bg-transparent">
                                                        <a href="#"><img
                                                                src="{{ asset('userdashboard/assets/images/brands/03.png') }}"
                                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                                alt="im"></a>
                                                    </li>
                                                    <li class="list-group-item border-0 bg-transparent">
                                                        <a href="#"><img
                                                                src="{{ asset('userdashboard/assets/images/brands/04.png') }}"
                                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                                alt="li"></a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </form>
                                        <div class="new-account mt-3 text-center">
                                            <p>Already have an Account? <a class="text-primary"
                                                    href="{{ route('login') }}">Sign
                                                    in</a></p>
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
    <script src="{{ asset('userdashboard/assets/js/charts/widgetcharts.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/fslightbox.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/charts/vector-chart.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/charts/dashboard.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/coinex.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/charts/apexcharts.js') }}"></script>
    <script src="{{ asset('userdashboard/assets/js/gsap.js') }}"></script>
</body>

</html>
