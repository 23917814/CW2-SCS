<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\survey;

class AdminSurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /** Sets the variable $survey to contain all data in the survey database
      * then return the view of admin/surveys with that variable
      */
    public function index()
    {
          $survey = survey::all();

          return view('admin/surveys', ['surveys' => $survey]);
    }

    /** Store the user input in the survey database,
     * and redirect the user to admin/surveys
     */
     public function store(Request $request)
     {
        $input = $request->all();

        survey::create($input);

        return redirect('admin/surveys');
     }
  }