@extends('layouts.master')

@section('title', 'Login')

@section('content')
<h1> If you're a researcher, please use your login here.</h2>

<form>
<label for="username">Username:</label></br>
<input type="text" name="username"><br>
<label for="password">Password:</label><br>
<input type="password" name="password"></br>
<input type="button" value="Submit">
</form> 

<button><a href="/">Back to home.</a></button>
<button><a href="/admin/surveys">Admin Home</a></button>
@endsection