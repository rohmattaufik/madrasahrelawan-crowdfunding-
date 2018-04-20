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


// ----------------------
//    ADMIN
// ----------------------

Route::get('admin/system_about','SystemController@view_system_about');

Route::get('admin/system_about/create','SystemController@create_system_about');

Route::post('admin/system_about/create/submit','SystemController@create_system_about_submit');

Route::get('admin/system_about/edit/{id}','SystemController@edit_system_about');

Route::post('admin/system_about/edit/submit','SystemController@edit_system_about_submit');

Route::get('admin/system_about/delete/{id}','SystemController@delete_system_about');



Route::get('admin/article','ArticleController@viewall_article');

Route::get('admin/article/{id}','ArticleController@view_article');

Route::get('admin/article/create','ArticleController@create_article');

Route::post('admin/article/create/submit','ArticleController@create_article_submit');

Route::get('admin/article/edit/{id}','ArticleController@edit_article');

Route::post('admin/article/edit/submit','ArticleController@edit_article_submit');

Route::get('admin/article/delete/{id}','ArticleController@delete_article');



Route::get('admin/recrutment/term','RecrutmentController@viewall_recrutment_term');

Route::get('admin/recrutment/term/{id}','RecrutmentController@view_recrutment_term');

Route::get('admin/create/recrutment/term','RecrutmentController@create_recrutment_term');

Route::post('admin/recrutment/term/create/submit','RecrutmentController@create_recrutment_term_submit');

Route::get('admin/recrutment/term/edit/{id}','RecrutmentController@edit_recrutment_term');

Route::post('admin/recrutment/term/edit/submit','RecrutmentController@edit_recrutment_term_submit');

Route::get('admin/recrutment/term/publish/{id}','RecrutmentController@publish_recrutment_term');

Route::get('admin/recrutment/term/unpublish/{id}','RecrutmentController@unpublish_recrutment_term');


Route::get('admin/recrutment/term/{id}/question/add','RecrutmentController@add_recrutment_question');

Route::post('admin/recrutment/question/add/submit','RecrutmentController@add_recrutment_question_submit');

Route::get('admin/recrutment/question/{id}/edit','RecrutmentController@edit_recrutment_question');

Route::post('admin/recrutment/question/edit/submit','RecrutmentController@edit_recrutment_question_submit');

Route::get('admin/recrutment/question/{id}/delete','RecrutmentController@delete_recrutment_question');


Route::get('admin/program','ProgramController@viewall_program');

Route::get('admin/program/{id}','ProgramController@view_program');

Route::get('admin/create/program','ProgramController@create_program');

Route::post('admin/program/create/submit','ProgramController@create_program_submit');

Route::get('admin/program/edit/{id}','ProgramController@edit_program');

Route::post('admin/program/edit/submit','ProgramController@edit_program_submit');

Route::get('admin/program/activate/{id}','ProgramController@activate_program');

Route::get('admin/program/nonactivate/{id}','ProgramController@nonactivate_program');


Route::get('admin/program/{id}/documentation/create','ProgramController@create_program_documentation');

Route::post('admin/program/documentation/create/submit','ProgramController@create_program_documentation_submit');

Route::get('admin/program/documentation/{id}/edit','ProgramController@edit_program_documentation');

Route::post('admin/program/documentation/edit/submit','ProgramController@edit_program_documentation_submit');

Route::get('admin/program/documentation/delete/{id}','ProgramController@delete_program_documentation');


Route::get('admin/project','ProjectController@viewall_project');

Route::get('admin/new-project','ProjectController@create_project');

Route::post('admin/new-project/submit','ProjectController@create_project_submit');

Route::get('admin/project/{id}','ProjectController@view_project');

Route::get('admin/project/edit/{id}','ProjectController@edit_project');

Route::post('admin/edit-project/submit','ProjectController@edit_project_submit');


Route::get('admin', function(){
    return view('admin.layout.layout');
});





// ---------------------------------
//          USER AREA
// ---------------------------------

Route::get('/tentang-mr', 'SystemController@tentang_mr');

Route::get('/program', 'ProgramController@program');

Route::get('/daftar_relawan', 'RecrutmentController@daftar_relawan');

Route::get('/kontak', function(){
    return view('user.kontak');
});



Route::get('/user', function(){
    return view('user.beranda');
});


Route::get('/usulan', function(){
    return view('user.usulan');
});



Route::get('/project', function(){
    return view('user.project');
});

