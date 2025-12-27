@extends('layouts.template')

@section('content')
    <h1>Calculate my age</h1>

    <form action=" {{ route('') }} " method="post">

        <input type="date" name="date_of_birth" value="">

        <button type="submit">Calculate</button>
    </form>

@endsection