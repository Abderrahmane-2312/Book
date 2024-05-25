@extends('layouts.app')

@section('content')
    
    <h1>Index Page </h1>

    <h2>For create new book : <a class="btn btn-info" href="{{ route('employers.create') }}">Create</a> </h2>

    <table class="table table-dark container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
                <th scope="col">View</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>
  @foreach($employers as $employer)

            <tr>
                <th scope="row">{{$employer->id}}</th>
                <td>{{$employer->name_emp}}</td>
                <td>{{$employer->email_emp}} </td>
                <td>
                    <a href="{{route('employers.edit',$employer->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <a href="{{route('employers.show', $employer->id)}}" class="btn btn-info">Show</a>
                </td>
                <td>
                    <form action="{{ route('employers.destroy', $employer->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
  @endforeach
        
        </tbody>
    </table>

@endsection