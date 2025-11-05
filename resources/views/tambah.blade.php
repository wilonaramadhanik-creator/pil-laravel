<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- 🔹 NAVBAR -->
<nav class="navbar navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">UTS Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarRight">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<!-- 🔹 SIDEBAR KANAN -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarRight">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu Navigasi</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled">
      <li><a href="/" class="nav-link">Home</a></li>
      <li><a href="/produk" class="nav-link">Produk</a></li>
      <li><a href="/tambah-produk" class="nav-link">Tambah Produk</a></li>
    </ul>
  </div>
</div>

<!-- 🔸 KONTEN UTAMA -->
<div class="container mt-5 pt-4 text-start">
  <h1 class="fw-bold mb-4">Halaman Tambah Produk</h1>

  <form>
    <div class="row mb-3">
      <div class="col">
        <label for="kode" class="form-label">Kode Produk</label>
        <input type="text" class="form-control" placeholder="Input Kode Produk">
      </div>
      <div class="col">
        <label for="nama" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" placeholder="Input Nama Produk">
      </div>
      <div class="col">
        <label for="jenis" class="form-label">Jenis Produk</label>
        <select class="form-select">
          <option>Pilih Jenis Produk</option>
          @foreach ($jenis as $j)
            <option>{{ $j }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="number" class="form-control" placeholder="Input Harga">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>

</body>
</html>

