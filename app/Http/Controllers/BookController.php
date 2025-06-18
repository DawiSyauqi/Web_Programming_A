<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
     public function index() 
    { 
       $books = Book::all(); 
    return BookResource::collection($books);
    } 
     
    public function store(Request $request) 
    { 
        $validated = $request->validate([ 
            'name' => 'required|string|max:255', 
            'description' => 'required|string', 
            'stock' => 'required|integer|min:0' 
        ]); 
         
        $book = Book::create($validated); 
         
        return response()->json([ 
            'status' => 'success', 
            'message' => 'Book created successfully', 
            'data' => $book
        ], 201); 
    } 
     
    public function show(Book $book) 
    { 
        return new BookResource($book); 
    } 
     
    public function update(Request $request, Book $book) 
    { 
        $validated = $request->validate([ 
            'name' => 'sometimes|string|max:255', 
            'description' => 'sometimes|string', 
            'stock' => 'sometimes|integer|min:0' 
        ]); 
         
        $book->update($validated); 
         
        return response()->json([ 
            'status' => 'success', 
            'message' => 'Book updated successfully', 
            'data' => $book
        ]); 
    } 
     
    public function destroy(Book $book) 
    { 
        $book->delete(); 
         
        return response()->json([ 
            'status' => 'success', 
            'message' => 'Book deleted successfully' 
        ]); 
    }
}
