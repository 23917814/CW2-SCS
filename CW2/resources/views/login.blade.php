<!-- Sets this blade to extend the master layout -->
@extends('layouts.master')

<!-- Sets the title of this page to be Login -->
@section('title', 'Login')

<!-- Houses all content for this page -->
@section('content')
<h1> If you're a researcher, please use your login here.</h2>

<!-- Login form - asks for a username in text form -->
<form>
<label for="username">Username:</label></br>
<input type="text" name="username"><br>
<!-- Sets type for this to "password" so test is set to dots not letters for security -->
<label for="password">Password:</label><br>
<input type="password" name="password"></br>
<input type="button" value="Submit">
</form> 

<!-- Nav buttons -->
<button><a href="/">Back to home.</a></button>
<button><a href="/admin/surveys">Admin Home</a></button>
@endsection