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
      Book::create($request->all());
      return Response::json(['created' => true]);
    }
}
