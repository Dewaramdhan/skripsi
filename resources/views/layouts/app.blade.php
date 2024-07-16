<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            background: #f8f9fa;
            height: 100vh;
            padding: 20px;
        }
        .sidebar a {
            text-decoration: none;
            display: block;
            padding: 10px;
            color: #333;
        }
        .sidebar a:hover {
            background: #e9ecef;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="{{ route('penduduk.index') }}">Data Penduduk</a>
        <a href="#">Data Klasifikasi</a>
        <a href="#">Data Uji</a>
        <a href="#">Data Uji</a>
        <a href="#">Data Uji</a>
    </div>
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sistem Klasifikasi</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-4">
            @yield('content')
        </div>
    </div>
</body>
</html>
