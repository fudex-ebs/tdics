<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\QuizService;
use Auth;

class AccountController extends Controller
{
    public function home(){
        if(Auth::user()->role == 'individual' ){
            return view('account.individual.home');
        }elseif(Auth::user()->role == 'company' ){
            return view('account.company.home');
        }else {
            return 'no rule';
        }
    }
    // get all generated personal coaching quezzes of a user 
    public function getPcCodes(){
        $quizzes = Auth::user()->created_quizzes->where('type','personal_coaching');
        if(Auth::user()->role == 'individual' ){
            return view('account.individual.quiz.pc_created_index',['quizzes'=>$quizzes]);
        }elseif(Auth::user()->role == 'company' ){
            return view('account.company.quiz.pc_index',['quizzes'=>$quizzes]);
        }else{
            return 'no rule';
        }
        
    }

    // get all generated role assessment quezzes of a user 
    public function getRaCodes(){
        $quizzes = Auth::user()->created_quizzes->where('type','role_assessment');
        return view('account.company.quiz.ra_index',['quizzes'=>$quizzes]);
        
    }

    // create and initialize new personal coaching quiz
    public function generatePcQuiz(){
        $quiz = Quiz::create(['used'=>false,'slug'=> uniqid(),'quizmaster_id' => Auth::user()->id,'type'=>'personal_coaching']);
        return redirect()->back();
        
    }

    // get all answered personal coaching quezzes of a user 
    public function getAnsweredPcQuizzes(){
        $quizzes = Auth::user()->answered_quizzes;
        return view('account.individual.quiz.pc_answered_index',['quizzes'=>$quizzes]);
    }
    
    // get all generated role assessment quezzes of a user 
    public function getRaQuizzes(){
        $quizzes = Auth::user()->created_quizzes->where('quiz_tipe','ra');
        return view('company.quiz.ra_quize_index',['quizzes'=>$quizzes]);
    }

    

    
}
