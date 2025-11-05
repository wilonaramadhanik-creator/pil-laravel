<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

<div class="container mt-4">
  <h1 class="text-start">Halaman Produk</h1>

  <div class="d-flex justify-content-end mb-3">
    <a href="/tambah-produk" class="btn btn-primary">Tambah Produk</a>
  </div>

  <table class="table table-bordered table-striped">
    <thead class="table-primary">
      <tr>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Jenis Produk</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($produk as $p)
      <tr>
        <td>{{ $p['kode'] }}</td>
        <td>{{ $p['nama'] }}</td>
        <td>{{ $p['jenis'] }}</td>
        <td>{{ $p['harga'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
