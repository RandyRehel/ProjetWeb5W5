<?php

/**
 * Application routes.
 */
Route::any('front', function () {
    
    return redirect(get_permalink(63)); 
});

Route::get('page',[63,function(){
    return view('welcome');
}]);