<html>
<body>
    
  <div class="row g-0 mt-5">
    <div class="col-md-2 bg-info mt-2 pt-4">
      <ul class="nav flex-column ms-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.php"><i
              class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
          <hr class="bg-secondary">
          <li class="nav-item">
          <a class="nav-link text-white" href="minuman.php"><i class="fa fa-wine-glass me-2"></i>Daftar
            minuman</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="restoran.php"><i class="fas fa-utensils me-2"></i>Daftar
            Restoran</a>
          <hr class="bg-secondary">
        </li>
    </div>

        <!-- Content -->
        <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-tachometer-alt me-2"></i> Dashboard</h3>
      <hr>
</body>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataku)
        <tr>
            <th scope ="row">{{ $dataku['id] }}</th>
            <td>{{ $dataku['nama'] }}</td>
            <td>{{ $dataku['harga'] }}</td>
            <td>
                <a href="{{ route('barang.edit', $dataku['id']) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('barang.delete', $dataku['id']) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</html>

