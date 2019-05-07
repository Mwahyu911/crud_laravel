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
<title>Tampil Data Pegawai nihgan</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/') }} ">Home | Mwahyu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                {{--  <div class="navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                         role="button" data-toggle="dropdown" aria-haspopup="true" 
                         aria-expanded="false">{{ Auth::user()->email }} </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {{--  Membuat href logut auth  --}}
                            {{--  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Logout
                                </a>    
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                      </div>
                    </li>
                  </ul>
                </div>  --}} 
                <div class="navbar-collapse ">  
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                         role="button" data-toggle="dropdown" aria-haspopup="true" 
                         aria-expanded="false">{{ Auth::user()->email }} </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            {{--  Membuat href logut auth  --}}
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Logout
                                </a>    
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </li>
                    </ul>
                </div>
              </nav>
<div class="container">
<div class="card mt-5">
<div class="card-header text-center">
Data Pegawai
</div>
<div class="card-body">
<a href="lara_crud2/pegawai/tambah" class="btn btn-primary">Input 
Pegawai Baru</a>
<br>
<br>
<table class="table table-bordered table-hover table-striped">
<thead>
<tr>
<th>Nama</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($pegawai as $p)
<tr>
<td>{{ $p->nama }}</td>
<td>{{ $p->alamat }}</td>
<td>
<a href="/lara_crud2/pegawai/edit/{{ $p->id }}"
class="btn btn-warning">Edit</a>
<a href="/lara_crud2/pegawai/hapus/{{ $p->id }}"
class="btn btn-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
<br>
{{ $pegawai->links() }}
</div>
</div>
</div>
<!-- Bootstrap core JavaScript --> 
<script src="{{ asset('js/jquery.min.js') 
}}"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>