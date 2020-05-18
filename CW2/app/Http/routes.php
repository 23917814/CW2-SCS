<?php

 // ===============================================
 // STATIC PAGES ==================================
 // ===============================================

 Route::resource('/', 'HomeController');
 Route::resource('/login', 'LoginController');
 Route::resource('/admin/surveys', 'AdminSurveysController');
 Route::resource('/admin/survey/create', 'SurveyCreateController');
