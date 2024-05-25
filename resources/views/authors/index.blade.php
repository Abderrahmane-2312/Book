@extends('layouts.app')
@section('content')

    <h1>Index Page </h1>

    {{-- @dd($authors) --}}


    <table class="table table-dark container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date Naissance</th>
                <th scope="col">Books</th>
            </tr>
        </thead>
        <tbody>
  @foreach($authors as $author)

            <tr>
                <th scope="row">{{$author->id}}</th>
                <td>{{$author->name}}</td>
                <td>{{$author->date_naissance}} </td>
                <td>
                    <a href="{{route('authors.show', $author->id)}}" class="btn btn-info">Books</a>
                </td>
            </tr>
  @endforeach
        
        </tbody>
    </table>
@endsection