<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">

        {{-- Logo --}}
        <a class="navbar-brand fw-bold" href="{{ route('admin-dashboard') }}">
            ADMIN ROOM
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

                @php
                    if(isset($page)){
                        if($page == 'course') $course = true;
                        else if($page == 'coach') $coach = true;
                        else if($page == 'student') $student = true;
                    }
                @endphp

                <li class="nav-item">
                    <a class="nav-link text-white {{ isset($course) ? 'fw-bold' : '' }}" href="{{ route('get-admin-manage-course') }}">
                        Manage Courses
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{ isset($coach) ? 'fw-bold' : '' }}" href="{{ route('get-admin-manage-coach') }}">
                        Manage Coaches
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{ isset($student) ? 'fw-bold' : '' }}" href="{{ route('get-admin-manage-student') }}">
                        Manage Students
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{ isset($enrollment) ? 'fw-bold' : '' }}" href="{{ route('get-admin-enrollment') }}">
                        Manage Enrollments
                    </a>
                </li>

                {{-- Logout --}}
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
