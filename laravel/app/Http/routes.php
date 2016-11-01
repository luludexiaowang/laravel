<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//基础路由
Route::get('/', function () {
    return view('welcome');
});
Route::get('basic1',function(){
    return 'Hello World';
});
//多请求路由
//Route::match(['get','post'],'multy1',function(){
//    return 'multy1';
//});
//Route::any('multy2',function(){
//    return 'multy2';
//});
//路由参数
//Route::get('user/{name?}',function($name = null){
//    return 'User-' .$name;
//});
//Route::get('user/{name?}',function($name = 'sean'){
//    return 'User-' .$name;
//});
//Route::get('user/{name?}',function($name = 'sean'){
//    return 'User-' . $name;
//})->where('name','[A-Za-z]+');

//Route::get('user/{id}/{name?}',function($id,$name = 'sean'){
//    return 'User-id-' .$id . '-name-' . $name;
//})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

//路由别名

//Route::get('user/member-center',['as'=>'center',function(){
//    return route('center');
//}]);

//路由群组

Route::group(['prefix' =>'member'],function(){

    Route::get('user/member-center',['as'=>'center',function(){
        return route('center');
    }]);

    Route::any('multy2',function(){
        return 'member-multy2';
    });
});

//路由中输出视图
Route::get('view', function () {
    return view('welcome');
});


//关联控制器
//方法1
//Route::get('member/info','MemberController@info');
//方法2
//Route::get('member/info',['uses'=>'MemberController@info']);


//别名
//Route::get('member/info',[
//    'uses'=>'MemberController@info',
//    'as' => 'memberinfo'
//
//    ]
//);

//参数绑定
Route::any('member/{id}',['uses'=>'MemberController@info'])->where('id','[0-9]+');


//student
Route::any('test1',['uses'=>'StudentController@test1']);

//查询构造器
Route::any('query1',['uses'=>'StudentController@query1']);

Route::any('query2',['uses'=>'StudentController@query2']);

Route::any('query3',['uses'=>'StudentController@query3']);

Route::any('query4',['uses'=>'StudentController@query4']);


Route::any('query5',['uses'=>'StudentController@query5']);

Route::any('orm1',['uses'=>'StudentController@orm1']);

Route::any('orm2',['uses'=>'StudentController@orm2']);

Route::any('orm3',['uses'=>'StudentController@orm3']);

Route::any('orm4',['uses'=>'StudentController@orm4']);

Route::any('section1',['uses'=>'StudentController@section1']);

Route::any('url',['as' => 'url','uses'=>'StudentController@urlText']);

Route::any('request1',['uses'=>'StudentController@request1']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
