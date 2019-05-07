<!DOCTYPE html>
<html>
<head>
<title>Edit Data Member</title>
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<style>
body {
margin-top: 15px; 
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<h3>Edit Member</h3>
<a href="/member" class="btn btn-primary">Kembali</a>
<br>
<br>
{{-- menampilkan error validasi --}}
@if(count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@foreach($member as $m)
<form action="/member/update" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $m->id }}">
<div class="form-group">
<label>Nama</label>
<input type="text" class="form-control"
name="nama" required="required" value="{{ $m->nama }}">
</div>
<div class="form-group">
<label>Pekerjaan</label>
<input type="text" class="form-control"
name="pekerjaan" required="required" value="{{ $m->pekerjaan }}">
</div>
<div class="form-group">
<label>Umur</label>
<input type="text" class="form-control"
name="umur" required="required" value="{{ $m->umur }}">
</div>
<div class="form-group">
<label>Alamat</label>
<textarea class="form-control"
name="alamat" required="required">{{ $m->alamat }}</textarea>
</div> 
indosmartdigital.com | Panduan Praktis Laravel 5 #Fundamental
25
<div class="form-group">
<input type="submit" value="Update"
class="btn btn-primary">
</div>
</form>
@endforeach
</div>
</div>
</div>
</div>
</div>
</body>
</html>