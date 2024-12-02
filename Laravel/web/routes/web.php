<?php

use Illuminate\Support\Facades\Route;
// web
Route::get('/', function () {
    return view('web.index');
});
Route::view('About', 'web.about');
Route::view('WebsiteDevelopment', 'web.WebsiteDevelopment');
Route::view('MobileAppDevelopement', 'web.MobileAppDevelopement');
Route::view('SoftwareDevelopement', 'web.SoftwareDevelopement');
Route::view('DigitalMarketing', 'web.DigitalMarketing');
Route::view('Blogs', 'web.Blogs');
Route::view('BlogDetails', 'web.BlogDetails');
Route::view('Contact', 'web.Contact');
Route::view('Packages', 'web.pricing');
Route::view('TermsCondition', 'web.terms-condition');
Route::view('PrivacyPolicy', 'web.privacy-policy');
Route::view('Error', 'web.error-404');
Route::view('SignUp', 'web.sign-up');
Route::view('logIn', 'web.log-in');

// admin
Route::view('AdminPanel', 'admin.index');
Route::view('MyDashboard', 'admin.dashboard');