<?php
Route::group(['middleware' => ['web']], function () {
    #关于我们
    Route::get('/about', ['as' => 'index.about','uses' => 'aboutController@index']);
    #联系我们
    Route::get('/contact', ['as' => 'index.contact','uses' => 'contactController@index']);
    #资讯中心
    Route::get('/newsinfo', ['as' => 'index.newsinfo','uses' => 'informationController@index']);
    #产品中心
    Route::get('/product', ['as' => 'index.product','uses' => 'productController@index']);
    #售后服务
    Route::get('/service', ['as' => 'index.service','uses' => 'serviceController@index']);
    #视频中心
    Route::get('/video', ['as' => 'index.video','uses' => 'videoController@index']);
    #人才招聘
    Route::get('/person', ['as' => 'index.person','uses' => 'ablityController@index']);

});
