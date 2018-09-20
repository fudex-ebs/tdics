<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin pages
Route::group(['prefix' => 'admin' ], function () {
    Route::get('/pc_question/index', 'DicsQuestionController@pc_index')->name('pc_question_index');
    Route::get('/ra_question/index', 'DicsQuestionController@ra_index')->name('ra_question_index');
    Route::post('/pc_question/create', 'DicsQuestionController@store_pc_questions')->name('pc_question_store');
    Route::post('/ra_question/create', 'DicsQuestionController@store_ra_questions')->name('ra_question_store');
});
// user account pages
Route::group(['prefix' => 'account','middleware' => 'auth' ], function () {
    Route::get('/answered_quiz/index', 'QuizController@AnsweredQuizzes')->name('answered_quizzes');
    Route::get('/created_quiz/index', 'QuizController@CreatedQuizzes')->name('created_quizzes');
    Route::post('/quiz/create', 'QuizController@StoreQuiz')->name('quiz_store');
});