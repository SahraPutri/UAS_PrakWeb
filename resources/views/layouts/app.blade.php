<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistem Nilai Mata Kuliah')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins */
            background-color: #2e3b4e; /* Dark background */
            color: #dcdcdc; /* Light grey text */
        }
        .navbar {
            background-color: #353c44; /* Darker grey */
        }
        .navbar-brand, .nav-link {
            color: #dcdcdc !important;
        }
        .navbar-toggler-icon {
            background-color: #dcdcdc;
        }
        .alert {
            background-color: #6c757d; /* Soft grey alert */
            color: #fff;
        }
        .btn {
            background-color: #5a636d; /* Soft grey buttons */
            color: #fff;
        }
        .btn:hover {
            background-color: #474f56;
        }
        .table {
            background-color: #3b454f; /* Dark table background */
            color: #dcdcdc;
        }
        .table th, .table td {
            color: #dcdcdc;
        }
        h1, h3, .card-body p {
            font-family: 'Roboto', sans-serif; /* Menggunakan font Roboto untuk judul dan teks */
        }
        .navbar-nav .nav-link {
            padding-right: 15px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Nilai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('mahasiswa') }}"><i class="fas fa-users"></i> Mahasiswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('matakuliah') }}"><i class="fas fa-book"></i> Mata Kuliah</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('nilaimahasiswa') }}"><i class="fas fa-clipboard-list"></i> Nilai Mahasiswa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        {{-- Flash Message --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            {{ session()->forget('success') }}
        @endif

        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
