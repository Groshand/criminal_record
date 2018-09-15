<?php

Route::get('niclog', function () {
    return view('component/nic/login');
});
Route::post('niclog',[
    'uses'=>'SessionController@niclog',
    'as'=>'niclog'
]);
Route::get('niclogout',[
    'uses'=>'SessionController@niclogout',
    'as'=>'niclogout'
]);
Route::get('adduser', function () {
    return view('component/nic/adduser');
});
Route::post('adduser',[
    'uses'=>'UserController@adduser',
    'as'=>'adduser'
]);
Route::post('searchuser',[
    'uses'=>'UserController@searchuser',
    'as'=>'searchuser'
]);


//police
Route::get('policelogin', function () {
    return view('component/police/policelogin');
});
Route::post('policelogin',[
    'uses'=>'PoliceController@policelogin',
    'as'=>'policelogin'
]);
Route::post('searchuserfrompolice',[
    'uses'=>'UserController@searchuserfrompolice',
    'as'=>'searchuserfrompolice'
])->middleware('auth:police');
Route::get('searchuserfrompolice', function () {
    return view('component/police/searchuser');
})->middleware('auth:police');
Route::post('addoffense/{id}',[
    'uses'=>'OffenseController@addoffense',
    'as'=>'addoffense'
])->middleware('auth:police');



//user
Route::post('userlogin',[
    'uses'=>'UserController@login',
    'as'=>'userlogin'
]);
Route::get('logout',[
    'uses'=>'UserController@logout',
    'as'=>'logout'
]);
Route::get('userlogin', function () {
    return view('component/user/userlogin');
});
Route::get('login',[
    'uses'=>'SessionController@login',
    'as'=>'login'
]);

//admin
Route::get('admin', function () {
    return view('component/admin/addofficer');
});
Route::post('addofficer',[
    'uses'=>'PoliceController@addofficer',
    'as'=>'addofficer'
]);