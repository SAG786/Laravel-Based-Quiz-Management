<?php $__env->startSection('content'); ?>



<div class="container">
    <?php if(count($questions)>0): ?>
        <?php
        $id=0;
        ?>
        <div class="row">
                <div class="col-md-8 float-left"></div>
                <div class="col-md-4 float-right">
                    <!--input type="text" id="demo" class="btn float-right" value="02:00" disabled-->
                </div>
        </div>

        <hr>
        <?php echo Form::open(['action' => 'QuizController@result', 'method'=>'post']); ?>

        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card-header">
            <?php echo e(++$id); ?>. &nbsp;&nbsp;&nbsp; <?php echo e($question->question); ?>

        </div>
        <div class="card-body">
            <input type="radio" name="<?php echo e('option'.$id); ?>"  value=" <?php echo e($question->opt1); ?> "><?php echo e($question->opt1); ?></input><br>
            <input type="radio" name="<?php echo e('option'.$id); ?>" value=" <?php echo e($question->opt2); ?> "><?php echo e($question->opt2); ?></input><br>
            <input type="radio" name="<?php echo e('option'.$id); ?>" value=" <?php echo e($question->opt3); ?> "><?php echo e($question->opt3); ?></input><br>
            <input type="radio" name="<?php echo e('option'.$id); ?>" value=" <?php echo e($question->opt4); ?> "><?php echo e($question->opt4); ?></input><hr>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>

        <?php echo Form::close(); ?>



    <?php endif; ?>
</div>
<!--script>
    var time=120;
    var countDownDate = new Date.getTime()+1800;
    setInterval(function()
    {

        var now = new Date().getTime();
        var distance = countDownDate - now;
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("demo").value = minutes + "m " + seconds + "s ";
        /*if (distance < 0)
        {
            clearInterval(x);
            document.getElementById("demo").value = "EXPIRED";
        }*/
    }, 1000);

</script-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Quiz/resources/views/student/startQuiz.blade.php ENDPATH**/ ?>