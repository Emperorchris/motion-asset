{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password
        reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <div style="background-image: url('{{ asset('userdashboard/assets/images/auth/01.png') }}')">
        <div class="wrapper">
            <section class="vh-100 bg-image">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-lg-5 col-md-6 mt-5">
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <div class="auth-form">
                                        <div class="text-center">
                                            <h2>Reset Password</h2>
                                        </div>
                                        <div>
                                            <p class="mt-3 text-center">Enter your email address and we'll send you an
                                                email
                                                with instructions to reset your password.</p>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-primary btn-sm mt-3">Reset</button>
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