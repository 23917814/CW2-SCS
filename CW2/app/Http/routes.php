<?php

 // ===============================================
 // STATIC PAGES ==================================
 // ===============================================

 /** Routes that bring all the controllers together, sets the urls. */
 Route::resource('/', 'HomeController');
 Route::resource('/login', 'LoginController');
 Route::resource('/admin/surveys', 'AdminSurveysController');
 Route::resource('/admin/survey/create', 'CreateSurveyController');
