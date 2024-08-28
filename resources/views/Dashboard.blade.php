<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pendaftaran Santri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@include('navbar')
    <div class="container mt-5">
    @yield('content')    
    <h1 class="mb-4">Dashboard Pendaftaran Calon Santri</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Pendaftar</h5>
                        <p class="card-text">{{ $data['totalPendaftar'] }} Santri</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Verifikasi Pending</h5>
                        <p class="card-text">{{ $data['verifikasiPending'] }} Santri</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Lulus Seleksi</h5>
                        <p class="card-text">{{ $data['lulusSeleksi'] }} Santri</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h3>Aksi Cepat</h3>
            <a href="{{ route('santri.create') }}" class="btn btn-primary">Tambah Pendaftar Baru</a>
            <a href="#" class="btn btn-warning">Verifikasi Dokumen</a>
            <a href="#" class="btn btn-success">Lihat Hasil Seleksi</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
