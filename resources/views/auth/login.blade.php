@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST" action="{{route('auth.login')}}">
                @csrf
                <label>Email :</label> 
                <input type="email" name="email"  > <br>
                <label>Password :</label> 
                <input type="password" name="password"  > <br>
                
                <button type="submit">Log_in</button> <br>
                <a href="{{route('auth.signup')}}">Signup</a>

            </form>
        </div>
    </div>
@endsection
