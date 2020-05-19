@extends('layouts.master')

@section('title', 'Surveys')

@section('content')
<h1>Welcome, Researcher!</h1>
<h2>Here are all the currently live surveys.</h2>
<button><a href="survey/create">Create Survey</a></button>
<button><a href="/">Log Out</a></button>
@endsection