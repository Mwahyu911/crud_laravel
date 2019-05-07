<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Custom styles -->
    <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/bootstap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/bootstap.css')); ?>" rel="stylesheet">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>
<body>
        <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
<?php /**PATH C:\Users\kiki\lara_crud\resources\views/pegawai/header.blade.php ENDPATH**/ ?>