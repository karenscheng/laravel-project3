<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AuthorController extends Controller
{
  public function index ()
  {
    //GET /authors
    $authors = Author::all();
    return Response::json($authors);
  }

  public function create (Request $request)
  {
    //POST /authors
    Author::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id) {
    //GET /authors/$id
    $author = Author::find($id);
    return Response::json($author);
  }

  public function update (Request $request, $id)
  {
    //PUT /authors/$id
    $author = Author::find($id);
    $success = $author->update($request->all());
    return Response::json(['updated' => $success]);
  }

  public function destroy ($id)
  {
    //DELETE /authors/$id
    $author = Author::find($id);
    $author->delete();
    return Response::json(['deleted' => true]);
  }
}
