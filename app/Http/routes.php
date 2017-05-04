<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',                  'FrontController@getIndex');
Route::post('/captcha',          'FrontController@Captcha');


Route::post('/feedback/mail', 'Back\MailController@send');

/*Route::get('/mail/{popup_name}', function ( $popup_name )
{
    if( $popup_name != 'thank' && $popup_name != 'error' )
    {
        Session::put('back_page', request()->header('referer'));
        Session::put('form_from', request()->header('form_page'));
    }

    return view('front.popup_pages.popup', [
        'popup_name' => $popup_name
    ]);
});*/


Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',                  'AdminController@getIndex');
    Route::get('/products',          'AdminController@getProducts');
    Route::get('/guarantee',         'AdminController@getGuarantee');
    Route::get('/about',             'AdminController@getAbout');
    Route::get('/meta',              'AdminController@getMeta');



    // Таксаномия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

