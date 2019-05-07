<!DOCTYPE html>
<html>
<head>
    <title>Form Data Member</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
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
                        <h3>Tambah Data Member</h3>
                        <a href="/member" class="btn btn-primary">Kembali</a>
                        <br>
                        <br>  
                        <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><?php echo e($error); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                        <form action="/pegawai/store" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="nama">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" type="text" name="alamat">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\kiki\lara_crud\resources\views/pegawai/tambah.blade.php ENDPATH**/ ?>