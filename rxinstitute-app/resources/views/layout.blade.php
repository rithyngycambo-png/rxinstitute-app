<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">



    
    <title>RX Institute</title>

    <style>
        /* Modern Sidebar */
        .sidebar-modern {
            width: 250px;
            height: 100vh;
            background: linear-gradient(180deg, #1e1b7a, #2a248f);
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            /* border-top-right-radius: 30px; */
            /* border-bottom-right-radius: 30px; */
        }

        /* Brand */
        .sidebar-modern .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 40px;
        }

        .sidebar-modern .brand-logo {
            width: 35px;
            height: 35px;
            border-radius: 8px;
        }

        .sidebar-modern .brand-name {
            font-size: 18px;
            font-weight: 600;
        }

        /* Nav items */
        .sidebar-modern .nav-list {
            list-style: none;
            width: 100%;
            padding: 0;
        }

        .sidebar-modern .nav-item {
            margin: 10px 0;
        }

        .sidebar-modern .nav-link {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #dcdcdc;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 30px 0 0 30px;
            transition: all 0.3s ease;
        }

        .sidebar-modern .nav-link i {
            font-size: 18px;
            width: 25px;
            text-align: center;
        }

        /* Hover + Active */
        .sidebar-modern .nav-link:hover,
        .sidebar-modern .nav-item.active .nav-link {
            background-color: #ffffff;
            color: #1e1b7a;
            font-weight: 600;
        }

        /* Adjust main content */
        .main-content {
            margin-left: 230px;
            padding-left: 20px;
        }

        .box {
            margin-left: 25px;
            margin-bottom: 30px;
            margin-top: 10px;
        }

        .each-box {
            margin-left: 0px;
            margin-right: 0px;
            /* margin-top: 10px; */

        }

        .home-box {
            margin-top: 0px;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar-modern">
        <div class="brand">
            <img src="{{ asset('screenshorts/rx.png') }}" alt="RX Logo" class="brand-logo">
            <span class="brand-name">RX Institute</span>
        </div>

        <ul class="nav-list">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('students*') ? 'active' : '' }}">
                <a href="{{ url('/students') }}" class="nav-link">
                    <i class="fas fa-user-graduate"></i>
                    <span>Student</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('lecturers*') ? 'active' : '' }}">
                <a href="{{ url('/lecturers') }}" class="nav-link">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Lecturer</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('departments*') ? 'active' : '' }}">
                <a href="{{ url('/departments') }}" class="nav-link">
                    <i class="fas fa-building"></i>
                    <span>Department</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('enrollments*') ? 'active' : '' }}">
                <a href="{{ url('/enrollments') }}" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    <span>Enrollment</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('/aboutUS') ? 'active' : '' }}">
                <a href="{{ url('/aboutUS') }}" class="nav-link">
                    <i class="fa-solid fa-address-card"></i>
                    <span>About US</span>
                </a>
            </li>
        </ul>
    </div>



    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/" style="display: flex; align-items: center; text-decoration: none;">
            <img src="{{ asset('screenshorts/rx.png') }}" alt="RX Logo"
                style="width:20px; height:20px; object-fit:cover; margin-right:10px;">
            <h2 style="margin: 0; font-size: 28px; font-weight: bold; color: black;">
                RX INSTITUTE OF TECHNOLOGY
            </h2>
        </a>
    </nav> -->

    <!-- Page Content -->
    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>