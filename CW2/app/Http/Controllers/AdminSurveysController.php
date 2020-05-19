<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\surveys;

class AdminSurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/surveys');
    }


     public function store(Request $request)
     {
        $input = $request->all();

        survey::create($input);

        return redirect('admin/survey');
     }
  }