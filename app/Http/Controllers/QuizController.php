<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use Auth;

class QuizController extends Controller
{
    // get all created quezzes of a user 
    public function CreatedQuizzes(){
        $quizzes = Auth::user()->created_quizzes;
        return view('quiz.created_index',['quizzes'=>$quizzes]);
    }
    // create and store new quiz 
    public function StoreQuiz(Request $request){
        $quiz = Quiz::create(['used'=>false,'slug'=> uniqid(),'quizmaster_id' => Auth::user()->id]);
        return redirect()->back();
    }
    // get all answered quezzes of a user 
    public function AnsweredQuizzes(){
        $quizzes = Auth::user()->answered_quizzes;
        return view('quiz.answered_index',['quizzes'=>$quizzes]);
    }

   

}
