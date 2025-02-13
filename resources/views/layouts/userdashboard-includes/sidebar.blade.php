<aside class="sidebar sidebar-default navs-rounded">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{ route('frontend.index') }}" class="navbar-brand dis-none align-items-center">
            <img style="max-width: 45px;" src="{{ asset('favicon.png') }}" class="img-fluid " alt="logo">
            <h4 class="logo-title m-0">Motion Asset</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5">
                    </path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body p-0 data-scrollbar">
        <div class="navbar-collapse pe-3" id="sidebar">
            <ul class="navbar-nav iq-main-menu">
                <li class="nav-item ">
                    <a class="nav-link {{ Route::is('userdashboard.dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('userdashboard.dashboard') }}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::is('userdashboard.earningHistory') ? 'active' : '' }}" aria-current="page" href="{{ route('userdashboard.earningHistory') }}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.4109 2.76862L16.4119 3.51824C19.1665 3.73413 20.9862 5.61119 20.9891 8.48975L21 16.9155C21.0039 20.054 19.0322 21.985 15.8718 21.99L8.15188 22C5.01119 22.004 3.01482 20.027 3.01087 16.8795L3.00001 8.55272C2.99606 5.65517 4.75153 3.78311 7.50617 3.53024L7.50518 2.78061C7.5042 2.34083 7.83001 2.01 8.26444 2.01C8.69886 2.009 9.02468 2.33883 9.02567 2.77861L9.02666 3.47826L14.8914 3.47027L14.8904 2.77062C14.8894 2.33084 15.2152 2.001 15.6497 2C16.0742 1.999 16.4099 2.32884 16.4109 2.76862ZM4.52148 8.86157L19.4696 8.84158V8.49175C19.4272 6.34283 18.349 5.21539 16.4138 5.04748L16.4148 5.81709C16.4148 6.24688 16.0801 6.5877 15.6556 6.5877C15.2212 6.5887 14.8943 6.24887 14.8943 5.81909L14.8934 5.0095L9.02863 5.01749L9.02962 5.82609C9.02962 6.25687 8.70479 6.5967 8.27036 6.5967C7.83594 6.5977 7.50913 6.25887 7.50913 5.82809L7.50815 5.05847C5.58286 5.25137 4.51753 6.38281 4.52049 8.55072L4.52148 8.86157ZM15.2399 13.4043V13.4153C15.2498 13.8751 15.625 14.2239 16.0801 14.2139C16.5244 14.2029 16.8789 13.8221 16.869 13.3623C16.8483 12.9225 16.4918 12.5637 16.0485 12.5647C15.5944 12.5747 15.2389 12.9445 15.2399 13.4043ZM16.0554 17.892C15.6013 17.882 15.235 17.5032 15.234 17.0435C15.2241 16.5837 15.5884 16.2029 16.0426 16.1919H16.0525C16.5165 16.1919 16.8927 16.5707 16.8927 17.0405C16.8937 17.5102 16.5185 17.891 16.0554 17.892ZM11.1721 13.4203C11.1919 13.8801 11.568 14.2389 12.0222 14.2189C12.4665 14.1979 12.821 13.8181 12.8012 13.3583C12.7903 12.9085 12.425 12.5587 11.9807 12.5597C11.5266 12.5797 11.1711 12.9605 11.1721 13.4203ZM12.0262 17.8471C11.572 17.8671 11.1968 17.5082 11.1761 17.0485C11.1761 16.5887 11.5305 16.2089 11.9847 16.1879C12.429 16.1869 12.7953 16.5367 12.8052 16.9855C12.8259 17.4463 12.4705 17.8261 12.0262 17.8471ZM7.10433 13.4553C7.12408 13.915 7.50025 14.2749 7.95442 14.2539C8.39872 14.2339 8.75317 13.8531 8.73243 13.3933C8.72256 12.9435 8.35725 12.5937 7.91196 12.5947C7.45779 12.6147 7.10334 12.9955 7.10433 13.4553ZM7.95837 17.8521C7.5042 17.8731 7.12901 17.5132 7.10828 17.0535C7.10729 16.5937 7.46273 16.2129 7.9169 16.1929C8.3612 16.1919 8.7275 16.5417 8.73737 16.9915C8.7581 17.4513 8.40365 17.8321 7.95837 17.8521Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Profit Records</span>
                    </a>
                </li>



                <li class="nav-item ">
                    <a class="nav-link {{ Route::is('userdashboard.deposit') ? 'active' : '' }}" aria-current="page" href="{{ route('userdashboard.deposit') }}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.08 22H7.91C4.38 22 2 19.729 2 16.34V7.67C2 4.28 4.38 2 7.91 2H16.08C19.62 2 22 4.28 22 7.67V16.34C22 19.729 19.62 22 16.08 22ZM14.27 11.25H7.92C7.5 11.25 7.17 11.59 7.17 12C7.17 12.42 7.5 12.75 7.92 12.75H14.27L11.79 15.22C11.65 15.36 11.57 15.56 11.57 15.75C11.57 15.939 11.65 16.13 11.79 16.28C12.08 16.57 12.56 16.57 12.85 16.28L16.62 12.53C16.9 12.25 16.9 11.75 16.62 11.47L12.85 7.72C12.56 7.43 12.08 7.43 11.79 7.72C11.5 8.02 11.5 8.49 11.79 8.79L14.27 11.25Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Deposit</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::is('userdashboard.withdraw') ? 'active' : '' }}" aria-current="page" href="{{ route('userdashboard.withdraw') }}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.2301 7.29052V3.2815C11.2301 2.85523 11.5701 2.5 12.0001 2.5C12.3851 2.5 12.7113 2.79849 12.763 3.17658L12.7701 3.2815V7.29052L17.55 7.29083C19.93 7.29083 21.8853 9.23978 21.9951 11.6704L22 11.8861V16.9254C22 19.373 20.1127 21.3822 17.768 21.495L17.56 21.5H6.44C4.06 21.5 2.11409 19.5608 2.00484 17.1213L2 16.9047L2 11.8758C2 9.4281 3.87791 7.40921 6.22199 7.29585L6.43 7.29083H11.23V13.6932L9.63 12.041C9.33 11.7312 8.84 11.7312 8.54 12.041C8.39 12.1959 8.32 12.4024 8.32 12.6089C8.32 12.7659 8.3648 12.9295 8.45952 13.0679L8.54 13.1666L11.45 16.1819C11.59 16.3368 11.79 16.4194 12 16.4194C12.1667 16.4194 12.3333 16.362 12.4653 16.2533L12.54 16.1819L15.45 13.1666C15.75 12.8568 15.75 12.3508 15.45 12.041C15.1773 11.7594 14.7475 11.7338 14.4462 11.9642L14.36 12.041L12.77 13.6932V7.29083L11.2301 7.29052Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Withdraw</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-widget" role="button"
                        aria-expanded="false" aria-controls="sidebar-widget">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 22C6.48 22 2 17.53 2 12C2 6.48 6.48 2 12 2C17.53 2 22 6.48 22 12C22 17.53 17.53 22 12 22ZM15.19 15.71C15.31 15.78 15.44 15.82 15.58 15.82C15.83 15.82 16.08 15.69 16.22 15.45C16.43 15.1 16.32 14.64 15.96 14.42L12.4 12.3V7.68C12.4 7.26 12.06 6.93 11.65 6.93C11.24 6.93 10.9 7.26 10.9 7.68V12.73C10.9 12.99 11.04 13.23 11.27 13.37L15.19 15.71Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Transaction Records</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-widget" data-bs-parent="#sidebar">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.depositHistory') ? 'active' : '' }} " href="{{ route('userdashboard.depositHistory') }}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> W </i>
                                <span class="item-name">Deposit History</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.withdrawHistory') ? 'active' : '' }} " href="{{ route('userdashboard.withdrawalHistory') }}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> W </i>
                                <span class="item-name">Withdrawal History</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('userdashboard.earningHistory') }}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> W </i>
                                <span class="item-name">Earnings History</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::is('userdashboard.referrals') ? 'active' : '' }}" aria-current="page" href="{{ route('userdashboard.referrals') }}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.1583 8.23285C16.1583 10.5825 14.2851 12.4666 11.949 12.4666C9.61292 12.4666 7.73974 10.5825 7.73974 8.23285C7.73974 5.88227 9.61292 4 11.949 4C14.2851 4 16.1583 5.88227 16.1583 8.23285ZM11.949 20C8.51785 20 5.58809 19.456 5.58809 17.2802C5.58809 15.1034 8.49904 14.5396 11.949 14.5396C15.3802 14.5396 18.31 15.0836 18.31 17.2604C18.31 19.4362 15.399 20 11.949 20ZM17.9571 8.30922C17.9571 9.50703 17.5998 10.6229 16.973 11.5505C16.9086 11.646 16.9659 11.7748 17.0796 11.7946C17.2363 11.8216 17.3984 11.8369 17.5631 11.8414C19.2062 11.8846 20.6809 10.821 21.0883 9.21974C21.6918 6.84123 19.9198 4.7059 17.6634 4.7059C17.4181 4.7059 17.1835 4.73201 16.9551 4.77884C16.9238 4.78605 16.8907 4.80046 16.8728 4.82838C16.8513 4.8626 16.8674 4.90853 16.8889 4.93825C17.5667 5.8938 17.9571 7.05918 17.9571 8.30922ZM20.6782 13.5126C21.7823 13.7296 22.5084 14.1727 22.8093 14.8166C23.0636 15.3453 23.0636 15.9586 22.8093 16.4864C22.349 17.4851 20.8654 17.8058 20.2887 17.8886C20.1696 17.9066 20.0738 17.8031 20.0864 17.6833C20.3809 14.9157 18.0377 13.6035 17.4315 13.3018C17.4055 13.2883 17.4002 13.2676 17.4028 13.255C17.4046 13.246 17.4154 13.2316 17.4351 13.2289C18.7468 13.2046 20.1571 13.3847 20.6782 13.5126ZM6.43711 11.8413C6.60186 11.8368 6.76304 11.8224 6.92063 11.7945C7.03434 11.7747 7.09165 11.6459 7.02718 11.5504C6.4004 10.6228 6.04313 9.50694 6.04313 8.30913C6.04313 7.05909 6.43353 5.89371 7.11135 4.93816C7.13284 4.90844 7.14806 4.86251 7.12746 4.82829C7.10956 4.80127 7.07553 4.78596 7.04509 4.77875C6.81586 4.73192 6.58127 4.70581 6.33593 4.70581C4.07951 4.70581 2.30751 6.84114 2.91191 9.21965C3.31932 10.8209 4.79405 11.8845 6.43711 11.8413ZM6.59694 13.2545C6.59962 13.268 6.59425 13.2878 6.56918 13.3022C5.9621 13.6039 3.61883 14.9161 3.91342 17.6827C3.92595 17.8034 3.83104 17.9061 3.71195 17.889C3.13531 17.8061 1.65163 17.4855 1.19139 16.4867C0.936203 15.9581 0.936203 15.3457 1.19139 14.817C1.49225 14.1731 2.21752 13.73 3.32156 13.512C3.84358 13.385 5.25294 13.2049 6.5656 13.2292C6.5853 13.2319 6.59515 13.2464 6.59694 13.2545Z"
                                    fill="currentColor"></path>
                            </svg>

                        </i>
                        <span class="item-name">Referrals</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::is('userdashboard.profile') ? 'active' : '' }}" aria-current="page" href="{{ route('userdashboard.profile') }}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M20.4023 13.58C20.76 13.77 21.036 14.07 21.2301 14.37C21.6083 14.99 21.5776 15.75 21.2097 16.42L20.4943 17.62C20.1162 18.26 19.411 18.66 18.6855 18.66C18.3278 18.66 17.9292 18.56 17.6022 18.36C17.3365 18.19 17.0299 18.13 16.7029 18.13C15.6911 18.13 14.8429 18.96 14.8122 19.95C14.8122 21.1 13.872 22 12.6968 22H11.3069C10.1215 22 9.18125 21.1 9.18125 19.95C9.16081 18.96 8.31259 18.13 7.30085 18.13C6.96361 18.13 6.65702 18.19 6.40153 18.36C6.0745 18.56 5.66572 18.66 5.31825 18.66C4.58245 18.66 3.87729 18.26 3.49917 17.62L2.79402 16.42C2.4159 15.77 2.39546 14.99 2.77358 14.37C2.93709 14.07 3.24368 13.77 3.59115 13.58C3.87729 13.44 4.06125 13.21 4.23498 12.94C4.74596 12.08 4.43937 10.95 3.57071 10.44C2.55897 9.87 2.23194 8.6 2.81446 7.61L3.49917 6.43C4.09191 5.44 5.35913 5.09 6.38109 5.67C7.27019 6.15 8.425 5.83 8.9462 4.98C9.10972 4.7 9.20169 4.4 9.18125 4.1C9.16081 3.71 9.27323 3.34 9.4674 3.04C9.84553 2.42 10.5302 2.02 11.2763 2H12.7172C13.4735 2 14.1582 2.42 14.5363 3.04C14.7203 3.34 14.8429 3.71 14.8122 4.1C14.7918 4.4 14.8838 4.7 15.0473 4.98C15.5685 5.83 16.7233 6.15 17.6226 5.67C18.6344 5.09 19.9118 5.44 20.4943 6.43L21.179 7.61C21.7718 8.6 21.4447 9.87 20.4228 10.44C19.5541 10.95 19.2475 12.08 19.7687 12.94C19.9322 13.21 20.1162 13.44 20.4023 13.58ZM9.10972 12.01C9.10972 13.58 10.4076 14.83 12.0121 14.83C13.6165 14.83 14.8838 13.58 14.8838 12.01C14.8838 10.44 13.6165 9.18 12.0121 9.18C10.4076 9.18 9.10972 10.44 9.10972 12.01Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Account Settings</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::is('userdashboard.kyc') ? 'active' : '' }}" aria-current="page" href="{{ route('userdashboard.kyc') }}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M20.4023 13.58C20.76 13.77 21.036 14.07 21.2301 14.37C21.6083 14.99 21.5776 15.75 21.2097 16.42L20.4943 17.62C20.1162 18.26 19.411 18.66 18.6855 18.66C18.3278 18.66 17.9292 18.56 17.6022 18.36C17.3365 18.19 17.0299 18.13 16.7029 18.13C15.6911 18.13 14.8429 18.96 14.8122 19.95C14.8122 21.1 13.872 22 12.6968 22H11.3069C10.1215 22 9.18125 21.1 9.18125 19.95C9.16081 18.96 8.31259 18.13 7.30085 18.13C6.96361 18.13 6.65702 18.19 6.40153 18.36C6.0745 18.56 5.66572 18.66 5.31825 18.66C4.58245 18.66 3.87729 18.26 3.49917 17.62L2.79402 16.42C2.4159 15.77 2.39546 14.99 2.77358 14.37C2.93709 14.07 3.24368 13.77 3.59115 13.58C3.87729 13.44 4.06125 13.21 4.23498 12.94C4.74596 12.08 4.43937 10.95 3.57071 10.44C2.55897 9.87 2.23194 8.6 2.81446 7.61L3.49917 6.43C4.09191 5.44 5.35913 5.09 6.38109 5.67C7.27019 6.15 8.425 5.83 8.9462 4.98C9.10972 4.7 9.20169 4.4 9.18125 4.1C9.16081 3.71 9.27323 3.34 9.4674 3.04C9.84553 2.42 10.5302 2.02 11.2763 2H12.7172C13.4735 2 14.1582 2.42 14.5363 3.04C14.7203 3.34 14.8429 3.71 14.8122 4.1C14.7918 4.4 14.8838 4.7 15.0473 4.98C15.5685 5.83 16.7233 6.15 17.6226 5.67C18.6344 5.09 19.9118 5.44 20.4943 6.43L21.179 7.61C21.7718 8.6 21.4447 9.87 20.4228 10.44C19.5541 10.95 19.2475 12.08 19.7687 12.94C19.9322 13.21 20.1162 13.44 20.4023 13.58ZM9.10972 12.01C9.10972 13.58 10.4076 14.83 12.0121 14.83C13.6165 14.83 14.8838 13.58 14.8838 12.01C14.8838 10.44 13.6165 9.18 12.0121 9.18C10.4076 9.18 9.10972 10.44 9.10972 12.01Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">KYC</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Route::is('userdashboard.index') }}" data-bs-toggle="collapse" href="#sidebar-maps" role="button"
                        aria-expanded="false" aria-controls="sidebar-maps">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z"
                                    fill="currentColor"></path>
                                <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="currentColor"></ellipse>
                            </svg>
                        </i>
                        <span class="item-name">Maps</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-maps" data-bs-parent="#sidebar">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="maps/google.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> G </i>
                                <span class="item-name">Google</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="maps/vector.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> V </i>
                                <span class="item-name">Vector</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('userdashboard.index') }}" data-bs-toggle="collapse" href="#sidebar-form" role="button"
                        aria-expanded="false" aria-controls="sidebar-form">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4"
                                    d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z"
                                    fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Form</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-form" data-bs-parent="#sidebar">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="form/form-element.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> E </i>
                                <span class="item-name">Elements</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="form/form-wizard.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> W </i>
                                <span class="item-name">Wizard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="form/form-validation.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> V </i>
                                <span class="item-name">Validation</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('userdashboard.index') }}" data-bs-toggle="collapse" href="#sidebar-table" role="button"
                        aria-expanded="false" aria-controls="sidebar-table">
                        <i class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z"
                                    fill="currentColor" stroke="currentColor" />
                                <path
                                    d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20"
                                    stroke="currentColor" />
                            </svg>
                        </i>
                        <span class="item-name">Table</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="table/bootstrap-table.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> B </i>
                                <span class="item-name">Bootstrap Table</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="table/table-data.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> D </i>
                                <span class="item-name">Datatable</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('userdashboard.index') }}" data-bs-toggle="collapse" href="#sidebar-icons" role="button"
                        aria-expanded="false" aria-controls="sidebar-icons">
                        <i class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M8 10.5378C8 9.43327 8.89543 8.53784 10 8.53784H11.3333C12.4379 8.53784 13.3333 9.43327 13.3333 10.5378V19.8285C13.3333 20.9331 14.2288 21.8285 15.3333 21.8285H16C16 21.8285 12.7624 23.323 10.6667 22.9361C10.1372 22.8384 9.52234 22.5913 9.01654 22.3553C8.37357 22.0553 8 21.3927 8 20.6832V10.5378Z"
                                    fill="currentColor" />
                                <rect opacity="0.4" x="8" y="1" width="5" height="5" rx="2.5" fill="currentColor" />
                            </svg>
                        </i>
                        <span class="item-name">Icons</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-icons" data-bs-parent="#sidebar">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="icons/solid.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> S </i>
                                <span class="item-name">Solid</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="icons/outline.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> O </i>
                                <span class="item-name">Outlined</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('userdashboard.index') }} " href="icons/dual-tone.html">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16"
                                        viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> D </i>
                                <span class="item-name">Dual Tone</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <div id="sidebar-footer" class="position-relative sidebar-footer">
            <div class="card mx-4">
                <div class="card-body">
                    <div class="sidebarbottom-content">
                        <div class="image">
                            <img src="{{ asset('userdashboard/assets/images/coins/13.png') }}" alt="User-Profile"
                                class="img-fluid">
                        </div>
                        <p class="mb-0">Your Transactions are secured with Motion Asset.</p>
                        <button type="button" class="btn btn-primary mt-3" style="font-size: 15px;">Motion Asset
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
