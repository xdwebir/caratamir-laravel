<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="">
            <img class="" height="50px" src="{{ asset('img/default-banner.jpg') }}" alt="{{ app_name() }}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        خانه
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://blog.caratamir.ir" class="nav-link">
                        مقالات
                    </a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="{{ route('frontend.users.profile', ['id' => encode_id(auth()->user()->id)]) }}"
                            class="nav-link">
                            داشبرد
                        </a>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="mx-1">ثبت نام</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            <span class="mx-1">ورود</span>
                        </a>
                    </li>
                @endguest

                @can('view_backend')
                    <li class="nav-item">
                        <a href='{{ route('backend.dashboard') }}' class="nav-link" role="menuitem">
                            <i class="fas fa-tachometer-alt fa-fw" height="20px"></i>&nbsp;پنل ادمین
                        </a>
                    </li>
                @endcan

                @auth
                    <li class="nav-item">
                        <a href="{{ route('frontend.users.profileEdit', encode_id(auth()->user()->id)) }}" class="nav-link"
                            role="menuitem">
                            <i class="fas fa-cogs fa-fw" height="20px"></i>&nbsp;تنظیمات
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="nav-link" role="menuitem">
                            خروج
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>


                @endauth
            </ul>

        </div>
    </div>
</nav>
