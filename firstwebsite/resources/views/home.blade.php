@extends('layouts.default')

@section('header')

<h1>Front paage</h1>

@endsection

@section('maincontent')
    
        <h1>Home</h1>
            <form action="{{ route('formsubmitted')}}" method="post">
                @csrf
                <label for="fullname">Full name:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Type your fullname!" required>
                <br><br>
                
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" placeholder="Type your email!" required>
                <br><br>
                <button type="submit">Submit</button>

            </form>
@endsection

@section('footer')
        <h2>this is a footer</h2>
        
@endsection
    