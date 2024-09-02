<!-- resources/views/santri/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Calon Santri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-group label {
            font-weight: bold;
            font-style: italic;
            font-size: 20px;
            color: #333;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .form-control {
            border: 2px solid #007bff; /* Blue border */
            border-radius: 5px;        /* Rounded corners */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3); /* Light blue shadow */
            transition: all 0.3s ease; /* Smooth transition */
        }

        .form-control:focus {
            border-color: #0056b3; /* Darker blue when focused */
            box-shadow: 0 0 8px rgba(0, 86, 179, 0.5); /* More pronounced shadow */
        }
    </style>
</head>
<body >
    <div class="container mt-5" style="background-color: #f8f9fa;">
        <h1 class="mb-4">Tambah Calon Santri</h1>
        <form action="{{ route('santri.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" required>
            </div>
            <!-- Tambahkan input field lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
