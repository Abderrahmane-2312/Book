@extends('layouts.app')
@section('content')
    <h1>Edit Page</h1>

    <section class="container">
        <form action="{{ route('employers.update', $employer->id) }}" method="post">
            @method('PUT')
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
                        <input type="email" disabled placeholder={{$employer->email_emp}}  name="email_emp" class="form-control">
                    </div>
                </div>
                <div class="pt-4 text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </div>
            </div>

        </form>
    </section>
@endsection
