@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <form method="POST" action="{{route('auth.store')}}">
                @csrf 

                <label>Email :</label> 
                <input type="email" name="email"   > <br>
                <label>Username :</label>
                <input type="text" name="username"  > <br>
                <label>Password :</label>
                <input type="password" name="password"  > <br> 
                <button type="submit">SignUp</button>
                <a href="{{route('auth.login')}}">Login</a>

            </form>
        </div>
    </div>
@endsection
