@extends('layouts.template')

@section('content')
    <h1>Calculate my age</h1>


    @foreach ($errors->all() as $error)
        <p style="color: red;"> {{ $error }} </p>
    @endforeach

    <form action=" {{ route('calculate_age') }} " method="post">
        @csrf
        Your birth date:<input type="date" name="date_of_birth" value="">
        <br>
        Your name: <input type="text" name="your_name">
        <br>
        <button type="submit">Calculate</button>
    </form>

@endsection