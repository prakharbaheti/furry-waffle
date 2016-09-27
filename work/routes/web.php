<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| This file is where you may define all of the routes that are handled
//| by your application. Just tell Laravel the URIs it should respond
//| to using a Closure or controller method. Build something great!
//|



    Route::get('/prakhar/{num?}',function($num=0){
        echo "i get the number $num";
    })->where(['num'=>"[0-9]+"])->name('def');

    Route::get('/prakh',function(){

        echo route('def',[12]);

    });






    Route::group(['middleware'=>['web']],function(){

        //blog internal
        Route::resource('posts','PostController');

        //blog page
        Route::get('/blog',function(){
            return view('pages/welcome');
        });
        Route::get('/contact',function(){
            return view('pages/contact');
        });
        Route::get('/about',function(){
            return view('pages/about');
        });


        Route::get('/',[
           'uses'=>'actionController@getHome',
            'as'=>'home'
        ]);

        Route::get('/greet/{name}',function($name){
            return view('actions/greet',['name'=>$name]);

        });


//        Route::get('/', function () {
//            return view('prakhar');
//        })->name('home');


        Route::post('/benice',['uses'=>'actionController@post','as'=>'benice']);


        //prefix
        Route::group(['prefix'=>'game'],function(){

            Route::get('/{actio}/{name?}',[
                'uses'=>'actionController@wish',
                'as'=>'niceaction'] );




        });

        //login
        Route::get('auth/login','Auth\LoginController@showLoginForm');
        Route::post('auth/login','Auth\LoginController@login')->name('login');
        Route::get('auth/logout','Auth\LoginController@logout');
        //register
        Route::get('auth/register','Auth\RegisterController@showRegistrationForm');
        Route::post('auth/register','Auth\RegisterController@register')->name('register');

        //password reset

        Route::get('password/reset','Auth\ResetPasswordController@showResetForm');
        Route::post('password/reset','Auth\ResetPasswordController@reset');
        Route::post('password/email','Auth\ResetPasswordController@sendResetLinkEmail');





    });

//    Route::auth();
//      //social login
        Route::get('auth/facebook', 'SocialController@redirectToProvider')->name('facebook');
        Route::get('auth/facebook/callback', 'SocialController@handleProviderCallback')->name('facebook1');


        //chat
        Route::get('invoke','chatController');
        Route::get('chat/{name?}','chatController@show');
        Route::post('chat/{name?}','chatController@post');
        Route::post('chat/update/retrieve','chatController@update');
