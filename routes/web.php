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
Route::get('plogout',[
    'uses'=>'PoliceController@plogout',
    'as'=>'plogout'
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
Route::post('searchpolice',[
    'uses'=>'PoliceController@searchpolice',
    'as'=>'searchpolice'
])->middleware('auth:police');
Route::get('owneprofile',[
    'uses'=>'PoliceController@owneprofile',
    'as'=>'owneprofile'
])->middleware('auth:police');
Route::get('palloffense',[
    'uses'=>'OffenseController@palloffense',
    'as'=>'palloffense'
])->middleware('auth:police');
Route::get('poffense/{id}',[
    'uses'=>'OffenseController@poffense',
    'as'=>'poffense'
])->middleware('auth:police');






//cout
Route::get('coutlogin', function () {
    return view('component/cout/coutlogin');
});
Route::post('coutlogin',[
    'uses'=>'CoutController@coutlogin',
    'as'=>'coutlogin'
]);
Route::get('clogout',[
    'uses'=>'CoutController@clogout',
    'as'=>'clogout'
]);
Route::post('searchuserfromcout',[
    'uses'=>'CoutController@searchuserfromcout',
    'as'=>'searchuserfromcout'
])->middleware('auth:cout');
Route::get('getoffense/{id}',[
    'uses'=>'OffenseController@getoffense',
    'as'=>'getoffense'
])->middleware('auth:cout');
Route::post('acceptoffense/{id}',[
    'uses'=>'OffenseController@acceptoffense',
    'as'=>'acceptoffense'
])->middleware('auth:cout');
Route::get('cout', function () {
    return view('layout/cout');
});
Route::get('cowneprofile',[
    'uses'=>'CoutController@cowneprofile',
    'as'=>'cowneprofile'
])->middleware('auth:cout');
Route::get('calloffense',[
    'uses'=>'OffenseController@calloffense',
    'as'=>'calloffense'
])->middleware('auth:cout');
Route::get('coffense/{id}',[
    'uses'=>'OffenseController@coffense',
    'as'=>'coffense'
])->middleware('auth:cout');




//user
Route::post('userlogin',[
    'uses'=>'UserController@login',
    'as'=>'userlogin'
]);
Route::get('ulogout',[
    'uses'=>'UserController@ulogout',
    'as'=>'ulogout'
]);
Route::get('userlogin', function () {
    return view('component/user/userlogin');
});
Route::get('login',[
    'uses'=>'SessionController@login',
    'as'=>'login'
]);
Route::get('uprofile',[
    'uses'=>'UserController@userprofile',
    'as'=>'uprofile'
])->middleware('auth:web');
Route::get('uoffense/{id}',[
    'uses'=>'OffenseController@uoffense',
    'as'=>'uoffense'
])->middleware('auth:web');
Route::get('ualloffense',[
    'uses'=>'OffenseController@ualloffense',
    'as'=>'ualloffense'
])->middleware('auth:web');
Route::post('searchoffense',[
    'uses'=>'OffenseController@searchoffense',
    'as'=>'searchoffense'
])->middleware('auth:web');



//admin
Route::get('admin', function () {
    return view('component/admin/addofficer');
});
Route::post('addofficer',[
    'uses'=>'PoliceController@addofficer',
    'as'=>'addofficer'
]);