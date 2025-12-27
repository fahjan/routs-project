@extends('layouts.template')

@section('content')
    <h1>Your age</h1>
    <p>You are {{ $age }} years old.</p>

    <p>
        <a href="{{ route('date_of_birth_form') }}">
            Calculate new age
        </a>
    </p>
@endsection