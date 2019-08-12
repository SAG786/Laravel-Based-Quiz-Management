@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Add Quiz</h1>
        {!! Form::open(['action' => 'QuizController@createQuestions', 'method'=>'post']) !!}
    <div class="form-group">
        {{Form::label('question','Question:')}}
        {{Form::textarea('question','',['class'=>'form-control','placeholder' => 'Enter Question','required' => 'true', 'rows'=>'3'])}}
    </div>
    <div class="form-group">
        {{Form::label('opt1','Option 1:')}}
        {{Form::text('opt1','',['class'=>'form-control','placeholder' => 'Enter Option 1','required' => 'true'])}}
    </div>
    <div class="form-group">
            {{Form::label('opt2','Option 2:')}}
            {{Form::text('opt2','',['class'=>'form-control','placeholder' => 'Enter Option 2','required' => 'true'])}}
    </div>
    <div class="form-group">
            {{Form::label('opt3','Option 3:')}}
            {{Form::text('opt3','',['class'=>'form-control','placeholder' => 'Enter Option 3','required' => 'true'])}}
    </div>
    <div class="form-group">
            {{Form::label('opt4','Option 4:')}}
            {{Form::text('opt4','',['class'=>'form-control','placeholder' => 'Enter Option 4','required' => 'true'])}}
    </div>
    <div class="form-group">
            {{Form::label('answer','Correct Answer:')}}
            {{Form::text('answer','',['class'=>'form-control','placeholder' => 'Enter Correct Answer', 'required' => 'true'])}}
    </div>
    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>

@endsection
