@extends('layouts.app')
@section('content')
    <div class=" container text-center pt-5  ">

        <h1 class="card-title">{{ $author->name }} </h1>
        @foreach ($author->books as $book)
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Books:</h6>
                    <div class="card-text">
                        <h3>{{ $book->title }}</h3>
                        <h4 class="color-info">{{ $book->prix }}DH</h4>
                        <h4 class="color-info">Date publication : {{ $book->date_publication }}</h4>
                    </div>
                    <a href="#" class="card-link btn btn-danger ">Delete</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
