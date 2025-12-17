<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Sidebar styling */
        .sidebar {
            height: 100vh;
            background: linear-gradient(180deg, #ff7e5f, #feb47b);
            color: white;
            border-radius: 0 20px 20px 0;
        }

        .sidebar h4 {
            color: white;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .sidebar .nav-link {
            color: white;
            margin: 0.5rem 0;
            font-weight: 500;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .sidebar .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .btn-logout {
            width: 100%;
            font-weight: 600;
        }

        /* Main content */
        main {
            min-height: 100vh;
        }

        /* Cards for dashboard */
        .dashboard-card {
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .dashboard-card i {
            font-size: 2rem;
            color: #ff7e5f;
        }
    </style>
</head>

<body>
    <div class="">
        <div class="row g-0">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar py-5 px-3">
                <div class="text-center mb-4">
                    <h4>Restaurant Admin</h4>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="{{ route('dashboard') }}" class="nav-link"><i class="bi bi-speedometer2 me-2"></i>
                            Dashboard</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('categories.index') }}" class="nav-link"><i class="bi bi-tags-fill me-2"></i>
                            Categories</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('meals.index') }}" class="nav-link"><i class="bi bi-basket-fill me-2"></i>
                            Meals</a>
                    </li>
                    <li class="nav-item mt-4">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-danger btn-logout"><i class="bi bi-box-arrow-right me-1"></i>
                                Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>

            <main class="col-md-9 col-lg-10 p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
