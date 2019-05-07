<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, 
shrink-to-fit=no">
<!-- Bootstrap core CSS -->
<link href="{{ asset('/css/bootstrap.min.css')
}}" rel="stylesheet">
<title>Edit Data Pegawai</title>
</head>
<body>
<div class="container">
<div class="card mt-5">
<div class="card-header text-center">
Edit Data Pegawai
</div>
<div class="card-body">
<a href="/lara_crud2/pegawai" class="btn btn-primary">Kembali</a>
<br>
<br>
<form method="post" action="/lara_crud2/pegawai/update/{{ $pegawai->id 
}}">
{{ csrf_field() }}
{{ method_field('PUT') }}
<div class="form-group">
<label>Nama</label>
<input class="form-control" type="text" name="nama"
value="{{ $pegawai->nama }}">
@if($errors->has('nama'))
<div class="text-danger">
{{ $error->first('nama') }}
</div>
@endif
</div>
<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control">{{ $pegawai->alamat }}</textarea>
@if($errors->has('alamat')) 
<div class="text-danger">
{{ $errors->first('alamat') }} 
</div>
@endif
</div>
<div class="form-group">
<input type="submit" value="Update" class="btn btn-success">
</div>
</form>
</div>
</div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/jquery.min.js') 
}}"></script>
<script src="{{ 
asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>