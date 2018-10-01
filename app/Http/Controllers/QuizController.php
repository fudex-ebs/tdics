<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\DicsQuestion;
use Auth;

class QuizController extends Controller
{
    // initialize new roel assessment quiz
    public function creaetRaQuiz(){
        // $quiz = Quiz::create(['used'=>false,'slug'=> uniqid(),'quizmaster_id' => Auth::user()->id],'type'=>'role_assessment');
        $questions = DicsQuestion::where('quiz_type','role_assessment')->get();
        return view('account.company.quiz.ra_create',['questions'=>$questions]);
    }
    // store quiz and its result 
    public function storeRaQuizzes(){
        // $quizzes = Auth::user()->created_quizzes->where('quiz_tipe','ra');
        // return view('company.quiz.ra_quize_index',['quizzes'=>$quizzes]);
    }

    // create and store new quiz 
    public function generatePcQuiz(Request $request){
        $quiz = Quiz::create(['used'=>false,'slug'=> uniqid(),'quizmaster_id' => Auth::user()->id,'type'=>'personal_coaching']);
        return redirect()->route('user.pc_quizzes');
    }

    //  get quiz and questions
    public function answerPcQuiz($slug){
        $quiz = Quiz::whereslug($slug)->get()->first();
        $questions = DicsQuestion::where('quiz_type','personal_coaching')->get();
        return view('quiz.answer',['questions'=>$questions]);
    }

    
   

}
