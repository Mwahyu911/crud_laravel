<!DOCTYPE html>
<html>
<head>
   <title>Data Member</title>
   <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<style>
body {
margin-top: 15px; 
}
.pagination li {
float:left;
list-style-type: none;
margin:5px;
}
</style>
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body">
<h1>Data Member</h1>
<p>Cari Data Member :</p>
   <form action="/member/cari" mehod="GET" class="form-inline">
<input class="form-control" type="text" name="cari"
placeholder="Cari Member" value="{{ old('cari') }}">
<input class="btn btn-primary ml-3" type="submit"
value="CARI">
</form> 
<br>
<a href="/member/tambah" class="btn btn-primary">+ Tambah 
Member Baru</a>
<br>
<br>
<table class="table table-bordered table-striped">
<tr>
<th>Nama</th>
<th>Pekerjaan</th>
<th>Umur</th>
<th>Alamat</th>
<th>Opsi</th>
</tr>
@foreach($member as $m)
<tr>
<td>{{ $m->nama }}</td>
<td>{{ $m->pekerjaan }}</td>
<td>{{ $m->umur }}</td>
<td>{{ $m->alamat }}</td>
<td>
<a class="btn btn-warning"
href="/member/edit/{{ $m->id }}">Edit</a>
<a class="btn btn-danger"
href="/member/hapus/{{ $m->id }}">Hapus</a>
</td>
</tr>
@endforeach
</table>
<br>
Halaman : {{ $member->currentPage() }} <br>
Jumlah Data : {{ $member->total() }} <br>
Data per Halaman : {{ $member->perPage() }}<br>
<br>
{{ $member->links() }}
</div>
</div>
</div>
</body>
</html>