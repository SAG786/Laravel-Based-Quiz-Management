<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Add Quiz</h1>
    <?php echo Form::open(['action' => 'QuizController@createQuiz', 'method'=>'post']); ?>

    <div class="form-group">
        <?php echo e(Form::label('name','Question:')); ?>

        <?php echo e(Form::textarea('name','',['class'=>'form-control','placeholder' => 'Enter Question'])); ?>

    </div>

    <?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Quiz/resources/views/teacher/addQuiz.blade.php ENDPATH**/ ?>