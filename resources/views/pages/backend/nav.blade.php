<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">



            <li class="nav-item">
                <i class="mdi mdi-file-document-box-outline menu-icon costom2"></i>
                <span class="menu-title costom1">Home</span>

            <div class="dropdown-content">
            <a href="{{ url('/admin-home-page') }}">Home 1st section</a>
            <a href="{{ url('/second-section') }}">Home 2nd section</a>
            {{-- <a href="{{ url('/third-section') }}">Home 3rd section</a> --}}
            <a href="{{ url('/forth-section') }}">Home 4th section</a>
            <a href="{{ url('/fifth-section') }}">Home 5th section</a>
            {{-- <a href="{{ url('/six-section') }}">Home 6th section</a> --}}
            </div>
            </li>



            <li class="nav-item">
                <i class="mdi mdi-file-document-box-outline menu-icon costom2"></i>
                <span class="menu-title costom1">About</span>

            <div class="dropdown-content">
            <a href="{{ url('/about-add') }}">About 1st section</a>


            </div>
            </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin-home-page') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/gallery-section') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Gallery view</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/six-section') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">blog post</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/trainer-add') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Expert Trainers</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/course-category/view') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Course Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/course-info/view') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Course Info</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/course-content/view') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Course Content</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/course-batch/view') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Course Batch</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/student-admit/view') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Student Admission</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/assign-batch/view') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Assign Batch</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/enroll-admin') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Enrolls</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin-contact-show') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Contact Data</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/all-user') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">All User</span>
            </a>
        </li>
    </ul>
</nav>
