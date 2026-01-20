<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">

        {{-- Logo --}}
        <a class="navbar-brand fw-bold" href="{{ route('student-dashboard') }}">
            STUDENT ROOM
        </a>

        {{-- Toggle (mobile) --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#adminNavbar" aria-controls="adminNavbar"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu --}}
        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('student-dashboard') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('get-student-my-courses') }}">
                        Kursus Saya
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('get-student-courses') }}">
                        Kursus
                    </a>
                </li>

               <li class="nav-item">
                    <a class="nav-link bg-white text-dark fw-bold ms-4 pb-1 pt-0 rounded-pill fw-semibold"
                       href="{{ route('get-logout') }}">
                        Logout
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
