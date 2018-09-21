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


Auth::routes();

Route::get('/register', function () {
        return redirect("login");
});

Route::get('/test', function () {
        return view("test");
});

Route::post('/register', function () {
        return redirect("login");
})->name("register");


Route::get('/', 'HomeController@index');
Route::middleware('auth')->group(function (){

    Route::get('/adminpanel',function(){
        return redirect("information");
    });

    Route::get('/information', 'InformationController@index');

    Route::post('/saveinfo','InformationController@saveInformation')->name("saveinfo");

    Route::get('/imageslide',"SlideImageController@index");

    Route::get('/imageslide/remove/{id}',"SlideImageController@removeBanner");

    Route::post('/uploadimageslide', 'SlideImageController@uploadImageSlide')->name("imageslide");

    Route::post('/updateimageslide', 'SlideImageController@updateImageSlide')->name("updateimageslide");

    Route::get('/trainings',"TrainingController@index");

    Route::get('/trainings/remove/{id}',"TrainingController@removeTraining");

    Route::post('/addTraining', 'TrainingController@addTraining')->name("trainings");

    Route::post('/updateTraining', 'TrainingController@updateTraining')->name("updateTraining");

    Route::get('/practices',"PracticeController@index");

    Route::get('/practices/remove/{id}',"PracticeController@removePractice");

    Route::post('/addPractice', 'PracticeController@addPractice')->name("practices");

    Route::post('/updatepractice', 'PracticeController@updatePractice')->name("updatepractice");

    Route::get('/lawers',"LawersController@index");

    Route::get('/lawers/remove/{id}',"LawersController@removeLawer");

    Route::post('/addLawer', 'LawersController@addLawer')->name("lawers");

    Route::post('/updateLawer', 'LawersController@updateLawer')->name("updateLawer");

    Route::get('/clients',"ClientController@index");

    Route::get('/clients/remove/{id}',"ClientController@removeClient");

    Route::post('/addClient', 'ClientController@addClient')->name("clients");

    Route::post('/updateClient', 'ClientController@updateClient')->name("updateClient");

    Route::get('/feedback',"FeedbackController@index");

    Route::get('/feedback/remove/{id}',"FeedbackController@removeFeedback");

    Route::post('/addFeedback', 'FeedbackController@addFeedback')->name("feedback");

    Route::post('/updateFeedback', 'FeedbackController@updateFeedback')->name("updateFeedback");

    Route::get('/membership',"MembershipController@index");

    Route::get('/membership/remove/{id}',"MembershipController@removeMembership");

    Route::post('/addMembership', 'MembershipController@addMembership')->name("membership");

    Route::post('/updateMembership', 'MembershipController@updateMembership')->name("updateMembership");


    Route::get('/links',"LinkController@index");

    Route::get('/links/remove/{id}',"LinkController@removeLink");

    Route::post('/addLink', 'LinkController@addLink')->name("links");

    Route::post('/updateLink', 'LinkController@updateLink')->name("updateLink");

    Route::get('/paymentmethod', function () {
        return view('adminpanel.paymentmethod');
    });

    Route::get('/paymentmethod',"PaymentMethodController@index");

    Route::get('/paymentmethod/remove/{id}',"PaymentMethodController@removePaymentmethod");

    Route::post('/addPaymentmethod', 'PaymentMethodController@addPaymentmethod')->name("paymentmethod");

    Route::post('/updatePaymentmethod', 'PaymentMethodController@updatePaymentmethod')->name("updatePaymentmethod");

    Route::get('/home', 'HomeController@index')->name('home');

});

Route::get('/picture/{filetype}/{filename}', function ($filetype, $filename) {
    // Check if file exists in app/storage/file folder
    $file_path = storage_path() .'/app/public/'.$filetype.'/'. $filename;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $filename, [
            'Content-Length: '. filesize($file_path)
        ]);
    }
});