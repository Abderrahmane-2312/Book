@extends('layouts.app')
@section('content')

    <h1>create Page</h1>

    <section class="container">
        <form action="{{ route('employers.store') }}" method="post">
            @csrf

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Name : </label>
                        <input type="text" name="name_emp" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="email" name="email_emp" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" name="password_emp" class="form-control">
                    </div>
                </div>
            </div>
            </div>
            <div class="row pt-4 text-center">
                <div class="col">
                    <a href='{{route('employers.index')}}' class="btn btn-danger">Annuler</a>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </div>
        </form>
    </section>

@endsection
