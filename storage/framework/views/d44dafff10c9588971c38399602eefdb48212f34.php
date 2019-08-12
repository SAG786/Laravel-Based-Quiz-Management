<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Add Quiz</h1>
        <?php echo Form::open(['action' => 'QuizController@createQuestions', 'method'=>'post']); ?>

    <div class="form-group">
        <?php echo e(Form::label('question','Question:')); ?>

        <?php echo e(Form::textarea('question','',['class'=>'form-control','placeholder' => 'Enter Question','required' => 'true', 'rows'=>'3'])); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('opt1','Option 1:')); ?>

        <?php echo e(Form::text('opt1','',['class'=>'form-control','placeholder' => 'Enter Option 1','required' => 'true'])); ?>

    </div>
    <div class="form-group">
            <?php echo e(Form::label('opt2','Option 2:')); ?>

            <?php echo e(Form::text('opt2','',['class'=>'form-control','placeholder' => 'Enter Option 2','required' => 'true'])); ?>

    </div>
    <div class="form-group">
            <?php echo e(Form::label('opt3','Option 3:')); ?>

            <?php echo e(Form::text('opt3','',['class'=>'form-control','placeholder' => 'Enter Option 3','required' => 'true'])); ?>

    </div>
    <div class="form-group">
            <?php echo e(Form::label('opt4','Option 4:')); ?>

            <?php echo e(Form::text('opt4','',['class'=>'form-control','placeholder' => 'Enter Option 4','required' => 'true'])); ?>

    </div>
    <div class="form-group">
            <?php echo e(Form::label('answer','Correct Answer:')); ?>

            <?php echo e(Form::text('answer','',['class'=>'form-control','placeholder' => 'Enter Correct Answer', 'required' => 'true'])); ?>

    </div>
    <?php echo Form::submit('Add', ['class' => 'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Quiz/resources/views/teacher/addQuestions.blade.php ENDPATH**/ ?>