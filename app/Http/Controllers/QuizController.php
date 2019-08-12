<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;

class QuizController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('teacher.addQuestions');
    }

    public function createQuestions(Request $request)
    {
        $question = new Questions;
        $question->question = $request->input('question');
        $question->opt1 = $request->input('opt1');
        $question->opt2 = $request->input('opt2');
        $question->opt3 = $request->input('opt3');
        $question->opt4 = $request->input('opt4');
        $question->answer = $request->input('answer');
        $question->save();
        return redirect('/addQuestions');
    }

    public function startQuiz(Request $request)
    {
        $questions = Questions::inRandomOrder()->get();
        session()->regenerate();
        session(['questions'=>$questions]);
        return view('student.startQuiz',compact('questions'));
    }

    public function result(Request $request)
    {
        session()->regenerate();
        $questions= session('questions');
        $id=1;
        $score=0;
        foreach($questions as $question){
            if($question->answer == $request->input('option'.$id++)){
                $score++;
            }
        }
        return view('student.result')->with('score',$score);
    }
}
