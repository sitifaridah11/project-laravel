<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h3>Data Siswa</h3>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $siswa)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $siswa->kelas->nama_kelas }}</td>
      <td>{{ $siswa->nis }}</td>
      <td>{{ $siswa->nama_siswa }}</td>
       <td>@if( $siswa->jenis_kelamin == "L") Laki-laki @else( $siswa->jenis_kelamin == "P") Perempuan @endif</td>
        <td>{{ $siswa->tanggal_lahir }}</td>
         <td>{{ $siswa->alamat }}</td>
         <td>{{ $siswa->email }}</td>
           <td>{{ $siswa->no_telepon }}</td>
      <td><a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Ubah</a> <a href="{{ route('siswa.destroy', $siswa->id) }}" class="btn btn-danger btn-sm">Hapus</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>