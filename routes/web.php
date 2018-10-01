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
    Route::get('/', 'AdminController@home')->name('admin.home');
    Route::get('/pc_question/index', 'DicsQuestionController@pc_index')->name('pc_question.index');
    Route::get('/ra_question/index', 'DicsQuestionController@ra_index')->name('ra_question.index');
    Route::post('/pc_question/create', 'DicsQuestionController@store_pc_questions')->name('pc_question.store');
    Route::post('/ra_question/create', 'DicsQuestionController@store_ra_questions')->name('ra_question.store');
    Route::get('/pc_quiz/index', 'AdminController@home')->name('admin.pc_quizzes');
    Route::get('ra_quiz/index', 'AdminController@home')->name('admin.ra_quizzes');
});
// user account pages
Route::group(['prefix' => 'account','middleware' => 'auth' ], function () {
    Route::get('/', 'AccountController@home')->name('account.home');
    Route::get('/answered_quiz/index', 'AccountController@getAnsweredPcQuizzes')->name('user.answered_pc_quizzes');
    Route::get('/pc_code/index', 'AccountController@getPcCodes')->name('user.pc_quizzes');
    Route::get('/ra_code/index', 'AccountController@getRaCodes')->name('user.ra_quizzes');
    Route::post('/pc_code/generate', 'QuizController@generatePcQuiz')->name('pc_code.generate');
});

// quizes
Route::group(['prefix' => 'quiz','middleware' => 'auth'], function () {
    Route::get('pc/{quiz_code}/answer', 'QuizController@answerPcQuiz')->name('answer_pc_quiz');
    Route::get('ra/create', 'QuizController@creaetRaQuiz')->name('create_ra_quiz');
});