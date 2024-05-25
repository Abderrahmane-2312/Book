@extends('layouts.app')
@section('content')
    <div class=" container text-center pt-5  ">

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">{{ $employer->name_emp }}</h3>
                <h6 class="card-subtitle mb-2 text-muted">Email: {{ $employer->email_emp }} </h6>
                <a href="{{ route('employers.edit', [$employer->id]) }}" class="card-link btn btn-info ">Edit</a>
                <a href="#" class="card-link btn btn-danger ">Delete</a>
            </div>
        </div>

    </div>
@endsection
