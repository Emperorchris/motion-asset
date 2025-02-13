<div class="position-relative">
    <!--Nav Start-->
    <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar border-bottom pb-lg-3  pt-lg-3 ">
        <div class="container-fluid navbar-inner">
            <a href="/" class="navbar-brand">
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20px" height="20px" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                    </svg>
                </i>
            </div>
            <h4 class="title">
                @yield('title')
            </h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto navbar-list mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item dropdown">
                        {{-- <a href="#" onclick="toggleTheme()" class="nav-link" id="search-drop theme-color"
                            data-bs-toggle="dropdown" aria-expanded="false">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="5" fill="currentColor" />
                                <path d="M12 2V4" stroke="currentColor" stroke-width="2" />
                                <path d="M12 20V22" stroke="currentColor" stroke-width="2" />
                                <path d="M4.22 4.22L5.64 5.64" stroke="currentColor" stroke-width="2" />
                                <path d="M18.36 18.36L19.78 19.78" stroke="currentColor" stroke-width="2" />
                                <path d="M2 12H4" stroke="currentColor" stroke-width="2" />
                                <path d="M20 12H22" stroke="currentColor" stroke-width="2" />
                                <path d="M4.22 19.78L5.64 18.36" stroke="currentColor" stroke-width="2" />
                                <path d="M18.36 5.64L19.78 4.22" stroke="currentColor" stroke-width="2" />
                            </svg>

                        </a> --}}

                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="notification-drop" data-bs-toggle="dropdown">
                            <svg width="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M14.3889 20.8572C13.0247 22.3719 10.8967 22.3899 9.51953 20.8572"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span class="bg-danger dots"></span>
                        </a>
                        <div class="sub-drop dropdown-menu iq-noti dropdown-menu-end p-0"
                            aria-labelledby="notification-drop">
                            <div class="card shadow-none m-0 bg-transparent">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <p class="fs-6 ">No notifications.</p>
                                    </div>
                                    {{-- <div class="header-title">
                                        <p class="fs-6">Mark all</p>
                                    </div> --}}
                                </div>
                                {{-- <div class="card-body p-0">
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex">
                                            <img src="assets/images/utilities/05.png"
                                                class="img-fluid avatar avatar-30 avatar-rounded" alt="img51">
                                            <div class="ms-3 w-100">
                                                <h6 class="mb-0 ">Successfull transaction og 0.01 BTC</h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">15 mins ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/utilities/03.png"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" alt="img52">
                                            </div>
                                            <div class="ms-3 w-100">
                                                <h6 class="mb-0 ">4 of Pending Transactions!</h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">30 mins ago</p>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/utilities/04.png"
                                                class="img-fluid avatar avatar-30 avatar-rounded" alt="img53">
                                            <div class="ms-3 w-100">
                                                <h6 class="mb-0 ">Cancelled order of 2000 ICO</h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">55 mins ago</p>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/utilities/05.png"
                                                class="img-fluid avatar avatar-30 avatar-rounded" alt="img54">
                                            <div class="w-100 ms-3">
                                                <h6 class="mb-0 ">Great speed notify of 1.34 LTC</h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">14 Mar</p>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="https://wa.me/+18029621417" class="nav-link">
                            <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.0045 2C6.48671 2 2 6.35525 2 11.826C2 13.8675 2.68883 15.7746 3.91589 17.2984L2.83768 21.3437L6.89099 20.3113C8.39882 21.2196 10.135 21.7837 12.0045 21.7837C17.5223 21.7837 22.009 17.4285 22.009 11.826C22.009 6.35525 17.5223 2 12.0045 2ZM8.83758 6.95797C8.58725 6.53273 8.29295 6.54255 7.98121 6.55075C7.66095 6.55913 7.33354 6.5706 7.03468 6.94575C6.76135 7.28895 6.18099 7.91933 6.18099 9.13479C6.18099 10.3501 7.03538 11.4836 7.16929 11.6897C7.30279 11.8959 8.70358 14.3879 11.0296 15.256C12.768 15.905 13.2294 15.7393 13.5634 15.6926C13.8973 15.646 14.8908 15.1406 15.2294 14.5412C15.5673 13.9417 15.5673 13.4086 15.5001 13.2875C15.4329 13.1665 15.263 13.0978 15.0569 13.0153C14.8513 12.9323 13.5199 12.3696 13.3139 12.2947C13.1082 12.2197 12.9383 12.1693 12.7683 12.4462C12.5984 12.7229 12.2277 13.2183 12.0578 13.4086C11.8878 13.5986 11.7178 13.6267 11.5118 13.5437C11.3057 13.4608 10.6683 13.2504 9.83954 12.5852C9.11559 12.0086 8.60484 11.2822 8.43489 11.0061C8.26494 10.7301 8.42132 10.5677 8.50999 10.4837C8.59865 10.3997 8.75502 10.1724 8.83758 10.0484C8.92014 9.92437 9.00339 9.83616 9.08636 9.71994C9.16933 9.60372 9.07395 9.43914 8.99133 9.35617C8.90873 9.27321 8.32448 8.18054 8.00426 7.68874C7.68442 7.19761 7.47682 7.15321 7.27367 7.11956C7.07052 7.08608 7.08791 7.08488 6.83758 6.95797Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>

                            <span class="bg-primary count-mail"></span>
                        </a>
                        {{-- <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop">
                            <div class="card shadow-none m-0 bg-transparent">
                                <div class="card-header d-flex justify-content-between py-3">
                                    <div class="header-title">
                                        <p class="mb-0 text-white">No Latest News</p>
                                    </div>
                                </div>
                                <div class="card-body p-0 ">
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex ">
                                            <div class="">
                                                <img src="assets/images/coins/02.png"
                                                    class="img-fluid avatar avatar-50 avatar-rounded" alt="img55">
                                            </div>
                                            <div class=" w-100 ms-3">
                                                <h6 class="mb-0 ">Bitcoin</h6>
                                                <small class="float-left font-size-12">Lorem Ipsum is simply
                                                    dummy text of the printing and typesetting industry.
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex">
                                            <div class="">
                                                <img src="assets/images/coins/03.png"
                                                    class="img-fluid avatar avatar-50 avatar-rounded" alt="img56">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 ">Ethereum</h6>
                                                <small class="float-left font-size-12">Lorem Ipsum is simply
                                                    dummy text of the printing and typesetting industry.
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex">
                                            <div class="">
                                                <img src="assets/images/coins/06.png"
                                                    class="img-fluid avatar avatar-50 avatar-rounded" alt="img57">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 ">Litecoin</h6>
                                                <small class="float-left font-size-12">Lorem Ipsum is simply
                                                    dummy text of the printing and typesetting industry.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ auth()->user()->profile_pic ?? asset('userdashboard/assets/images/avatars/01.png') }}" alt="User-Profile"
                                class="img-fluid avatar avatar-50 avatar-rounded">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li class="border-0"><a class="dropdown-item"
                                    href="{{ route('userdashboard.profile') }}">Profile</a></li>
                            {{-- <li class="border-0"><a class="dropdown-item" href="app/user-privacy-setting.html">Privacy
                                    Setting</a></li> --}}
                            <li class="border-0">
                                <hr class="m-0 dropdown-divider">
                            </li>
                            <li class="border-0">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Nav End-->
</div>
