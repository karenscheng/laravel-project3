<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class BookController extends Controller
{
    public function index ()
    {
      //GET /books
      $books = Book::all();
      return Response::json($books);
    }

    public function create (Request $request)
    {
      //POST /books
      Book::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ($id) {
      //GET /books/$id
      $book = Book::find($id);
      return Response::json($book);
    }

    public function update (Request $request, $id)
    {
      //PUT /books/$id
      $book = Book::find($id);
      $success = $book->update($request->all());
      return Response::json(['updated' => $success]);
    }

    public function destroy ($id)
    {
      //DELETE /books/$id
      $book = Book::find($id);
      $book->delete();
      return Response::json(['deleted' => true]);
    }
}
