<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, 
shrink-to-fit=no">
<!-- Bootstrap core CSS -->
<link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet">
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
<form method="post" action="/lara_crud2/pegawai/update/<?php echo e($pegawai->id); ?>">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PUT')); ?>

<div class="form-group">
<label>Nama</label>
<input class="form-control" type="text" name="nama"
value="<?php echo e($pegawai->nama); ?>">
<?php if($errors->has('nama')): ?>
<div class="text-danger">
<?php echo e($error->first('nama')); ?>

</div>
<?php endif; ?>
</div>
<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control"><?php echo e($pegawai->alamat); ?></textarea>
<?php if($errors->has('alamat')): ?> 
<div class="text-danger">
<?php echo e($errors->first('alamat')); ?> 
</div>
<?php endif; ?>
</div>
<div class="form-group">
<input type="submit" value="Update" class="btn btn-success">
</div>
</form>
</div>
</div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\kiki\lara_crud\resources\views/pegawai/edit.blade.php ENDPATH**/ ?>