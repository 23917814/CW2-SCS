<!-- Sets this blade to extend the master layout -->
@extends('layouts.master')

<!-- Sets the title of this page to be Surveys -->
@section('title', 'Surveys')

<!-- Houses all content for this page -->
@section('content')
<h1>Welcome, Researcher!</h1>
<h2>Here are all the currently live surveys.</h2>

<!-- If statement to print all rows of the surveys table -->
<section>
    @if (isset ($surveys))
        <table>
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($surveys as $survey)
                    <tr>
                        <td>{{ $survey->title }}</td>
                        <td>{{ $survey->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
      <!-- If no questionnaires in the table, print this.-->
    <p> No questionnaires currently avaliable. </p>
    @endif
</section>

<!-- Nav buttons -->
<button><a href="survey/create">Create Survey</a></button>
<button><a href="/">Log Out</a></button>
@endsection