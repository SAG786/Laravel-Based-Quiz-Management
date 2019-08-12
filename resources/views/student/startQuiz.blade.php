@extends('layouts.app')
@section('content')

<div class="container">
    @if (count($questions)>0)
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
        {!! Form::open(['action' => 'QuizController@result', 'method'=>'post']) !!}
        @foreach ($questions as $question)
        <div class="card-header">
            {{++$id}}. &nbsp;&nbsp;&nbsp; {{$question->question}}
        </div>
        <div class="card-body">
            <input type="radio" name="{{'option'.$id}}"  value=" {{$question->opt1}} ">{{$question->opt1}}</input><br>
            <input type="radio" name="{{'option'.$id}}" value=" {{$question->opt2}} ">{{$question->opt2}}</input><br>
            <input type="radio" name="{{'option'.$id}}" value=" {{$question->opt3}} ">{{$question->opt3}}</input><br>
            <input type="radio" name="{{'option'.$id}}" value=" {{$question->opt4}} ">{{$question->opt4}}</input><hr>
        </div>
        @endforeach
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}


    @endif
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
@endsection
