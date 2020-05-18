<?php

 // ===============================================
 // STATIC PAGES ==================================
 // ===============================================

 // show a static view for your home page (app/resources/views/home.blade.php)
 Route::get('/', function()
 {
     return view('home');
 });

 // about page (app/resources/views/skills.blade.php)
 Route::get('skills', function()
 {
     return view('skills');
 });
