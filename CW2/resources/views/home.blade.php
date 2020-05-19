@extends('layouts.master')

@section('title', 'Welcome!')

@section('content')
<h1> Welcome! Please select from the below questionnaires. </h1>


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
    <p> No questionnaires currently avaliable. </p>
    @endif
</section>
<button><a href="/login"> Are you a Researcher? Click here! </a></button>
@endsection