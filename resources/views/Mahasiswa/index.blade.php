<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="container mt-4">

    <h1 class="text-center mb-4">Halaman Mahasiswa</h1>

    <div class="row">
        <!-- Tabel Data -->
        <div class="col-md-7">
            <h4>Data Mahasiswa</h4>
            <table class="table table-dark table-striped mt-3" id="tabelMahasiswa">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Mahasiswa as $i => $mhs)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $mhs['nim'] }}</td>
                            <td>{{ $mhs['nama'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Form Input -->
        <div class="col-md-5">
            <h4>Form Tambah Mahasiswa</h4>
            <form id="formMahasiswa">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>

    <!-- jQuery AJAX -->
    <script>
        $(document).ready(function() {
            $('#formMahasiswa').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('mahasiswa.store') }}",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(data) {
                        let no = $('#tabelMahasiswa tbody tr').length + 1;
                        $('#tabelMahasiswa tbody').append(`
                            <tr>
                                <td>${no}</td>
                                <td>${data.nim}</td>
                                <td>${data.nama}</td>
                            </tr>
                        `);
                        $('#formMahasiswa')[0].reset();
                    },
                    error: function() {
                        alert("Terjadi kesalahan saat menyimpan data!");
                    }
                });
            });
        });
    </script>

</body>
</html>