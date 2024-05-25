<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function index(){
        return view('authors.index' , ['authors' => Author::all() ] ) ;
    } 

    public function show(string $id){
        $author = Author::with('books')->find($id) ;

        return view('authors.show' , compact('author') ) ;
        
    } 


    public function destroy(string $id){
        $author = Author::find($id) ;
        $author->delete() ;
        return redirect()->route('authors.index') ;
    } 

}
