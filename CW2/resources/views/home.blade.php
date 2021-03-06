<!-- Sets this blade to extend the master layout -->
@extends('layouts.master')

<!-- Sets the title of this page to be Welcome! -->
@section('title', 'Welcome!')

<!-- Houses all content for this page -->
@section('content')
<h1> Welcome! Please select from the below questionnaires. </h1>

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
                        <td><button> Take this Questionnaire </button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
    <!-- If no questionnaires in the table, print this.-->
    <p> No questionnaires currently avaliable. </p>
    @endif
</section>
<!-- Takes user to the login page -->
<button><a href="/login"> Are you a Researcher? Click here! </a></button>
@endsection