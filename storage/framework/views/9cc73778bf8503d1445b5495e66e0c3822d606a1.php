<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, 
shrink-to-fit=no">
<!-- Bootstrap core CSS -->
<link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet">
<title>Tampil Data Pegawai nihgan</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?> ">Home | Mwahyu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                
                             
                <div class="navbar-collapse ">  
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                         role="button" data-toggle="dropdown" aria-haspopup="true" 
                         aria-expanded="false"><?php echo e(Auth::user()->email); ?> </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Logout
                                </a>    
                                <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

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
<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($p->nama); ?></td>
<td><?php echo e($p->alamat); ?></td>
<td>
<a href="/lara_crud2/pegawai/edit/<?php echo e($p->id); ?>"
class="btn btn-warning">Edit</a>
<a href="/lara_crud2/pegawai/hapus/<?php echo e($p->id); ?>"
class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<br>
<?php echo e($pegawai->links()); ?>

</div>
</div>
</div>
<!-- Bootstrap core JavaScript --> 
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\kiki\lara_crud\resources\views/pegawai/index.blade.php ENDPATH**/ ?>