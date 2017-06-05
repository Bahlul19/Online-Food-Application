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




Route::get('/','userorderController@adminpanelOderitemshow');
Route::get('approve-order/{id}','userorderController@order_approve');
Route::get('cancel-order/{id}','userorderController@order_cancel');
Route::get('view-order/{id}','userorderController@order_view');
Route::get('delete-order/{id}','userorderController@order_del');


//Ordetails
Route::get('/orderdetails', function () {
    return view('shared.box.orderdetails');
});

//cancelOrdetails
Route::get('/cancelorder', function () {
    return view('shared.cancelOrder');
});


//user homepage

Route::get('/userhome', function () {
    return view('userhome');
});

//user homepage

Route::get('/userorder', function () {
    return view('userorder');
});

Route::get('session_order','userorderController@userOrder');
Route::get('orderlist','userorderController@cartList');
Route::get('orderview','userorderController@adminordershow');
Route::get('orderitems','userorderController@UserorderItems');
//
Route::get('orderitemsshowadmin','userorderController@adminpanelOderitemshow');
Route::get('orderitemsshowadmin','userorderController@moreDetailsitems');


//user aboutpage

Route::get('/userabout', function () {
    return view('userabout');
});

//user aboutpage

Route::get('/usercareer', function () {
    return view('userCareers');
});

//user faqpage

Route::get('/userfaq', function () {
    return view('userfaq');
});

//user signup
Route::get('/signup', function () {
    return view('usersignup');
});

//user signup
Route::get('/userlogin', function () {
    return view('userLogin');
});

//user help
Route::get('/help', function () {
    return view('userHelp');
});

//user help
Route::get('/contact', function () {
    return view('usercontact');
});

//Terms page
Route::get('/terms', function () {
    return view('usertermspage');
});

//Privacy page
Route::get('/privacy', function () {
    return view('userprivacypage');
});

//citypage
//citypage
Route::get('city','usercityPage@getIndex');
//Route::get('search','usercityPage@getIndex');
Route::get('ajaxsearch','usercityPage@ajaxSearch');


//All Route Section Of The Area
Route::get('areapage','AreaController@getIndex');
Route::get('areapageSave','AreaController@getAreaSave');
Route::get('areapageDelete/{id}','AreaController@getAreaDel');
Route::get('areapageUpdate/{id}','AreaController@getAreaEdit');
Route::get('areapageUpdateSave','AreaController@getAreaEditSave');

//All Route Section Of The Restaurant
Route::get('restaurantpage','RestaurantController@getIndex');
Route::get('restaurantpageSave','RestaurantController@getRestaurantSave');
Route::get('restaurantpageDelete/{id}','RestaurantController@getRestaurantDel');;
Route::get('restaurantpageUpdate/{id}','RestaurantController@getRestaurantEdit');;
Route::get('restaurantpageUpdateSave','RestaurantController@getRestaurantEditSave');;




//All Route Section Of The FoodItem
Route::get('fooditempage','FoodItemController@getIndex');
Route::post('fooditempageSave','FoodItemController@getFoodItemSave');
Route::get('fooditempageDelete/{id}','FoodItemController@getFoodItemDel');
Route::get('fooditempageUpdate/{id}','FoodItemController@getFoodItemEdit');
Route::get('fooditempageUpdateSave','FoodItemController@getFoodItemEditSave');


Route::get('js',function(){
    return view('jsTest');
});



Route::auth();

Route::get('/home', 'HomeController@index');
