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
    		$dics_question->slug = uniqid();
    		$dics_question->content_ar = $request->get('content_ar');
    		$dics_question->content_en = $request->get('content_en');
    		$dics_question->option_d_ar = $request->get('option_d_ar');
    		$dics_question->option_d_en = $request->get('option_d_en');
    		$dics_question->option_i_ar = $request->get('option_i_ar');
    		$dics_question->option_i_en = $request->get('option_i_en');
    		$dics_question->option_s_ar = $request->get('option_s_ar');
    		$dics_question->option_s_en = $request->get('option_s_en');
    		$dics_question->option_c_ar = $request->get('option_c_ar');
    		$dics_question->option_c_en = $request->get('option_c_en');
    		$dics_question->quiz_type = 'role_assessment';
    		$dics_question->save();
    	}else{
    		return $dics_question->errors();
    	}
    	return redirect()->route('dics_question_index');
    }
    // store dics personal coaching questions 
    public function store_pc_questions(Request $request){

        $dics_question = new DicsQuestion();
        if($dics_question->validate($request->all()) ){
            $dics_question->slug = uniqid();
            $dics_question->option_d_ar = $request->get('option_d_ar');
            $dics_question->option_d_en = $request->get('option_d_en');
            $dics_question->option_i_ar = $request->get('option_i_ar');
            $dics_question->option_i_en = $request->get('option_i_en');
            $dics_question->option_s_ar = $request->get('option_s_ar');
            $dics_question->option_s_en = $request->get('option_s_en');
            $dics_question->option_c_ar = $request->get('option_c_ar');
            $dics_question->option_c_en = $request->get('option_c_en');
            $dics_question->quiz_type = 'personal_coaching';
            $dics_question->save();
        }else{
            return $dics_question->errors();
        }
        return redirect()->route('dics_question_index');
    }
}
