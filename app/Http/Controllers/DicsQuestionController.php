<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DicsQuestion;


class DicsQuestionController extends Controller
{
    public function ra_index(){
    	$dics_questions = DicsQuestion::where('quiz_type','role_assessment')->get();
    	return view('admin.dics_questions.ra_index',['dics_questions'=>$dics_questions]);
    }

    public function pc_index(){
        $dics_questions = DicsQuestion::where('quiz_type','personal_coaching')->get();
        return view('admin.dics_questions.pc_index',['dics_questions'=>$dics_questions]);
    }
    // store dics role assessment  questions
    public function store_ra_questions(Request $request){

    	$dics_question = new DicsQuestion();
    	if($dics_question->validate($request->all()) ){
            $data = array_merge([
               'slug' => uniqid(),
               'quiz_type' => 'role_assessment'
            ], $request->all());
            DicsQuestion::create($data);
    	}else{
    		return $dics_question->errors();
    	}
    	return redirect()->route('ra_question.index');
    }
    // store dics personal coaching questions 
    public function store_pc_questions(Request $request){

        $dics_question = new DicsQuestion();
        if($dics_question->validate($request->all()) ){
            $data = array_merge([
               'slug' => uniqid(),
               'quiz_type' => 'personal_coaching'
            ], $request->all());
            DicsQuestion::create($data);
        }else{
            return $dics_question->errors();
        }
        return redirect()->route('pc_question.index');
    }
}
