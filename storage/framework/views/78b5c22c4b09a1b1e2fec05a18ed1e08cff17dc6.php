<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <h4>Name: <?php echo e(auth()->user()->name); ?> </h4>
                    <div class="row">
                        <div class="col-md-8 float-left">
                        <h4>Email: <?php echo e(auth()->user()->email); ?> </h4>
                        </div>
                    <div class="col-md-4 float-right">
                        <a href="startQuiz" class="btn btn-primary float-right">Start Quiz </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Quiz/resources/views/student/home.blade.php ENDPATH**/ ?>