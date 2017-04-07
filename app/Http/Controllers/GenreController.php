<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class GenreController extends Controller
{
  public function index ()
  {
    //GET /genres
    $genres = Genre::all();
    return Response::json($genres);
  }

  public function create (Request $request)
  {
    //POST /genres
    Genre::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id) {
    $genre = Genre::find($id);
    return Response::json($genre);
  }

  public function update (Request $request, $id)
  {
    //PUT /genres/$id
    $genre = Genre::find($id);
    $success = $genre->update($request->all());
    return Response::json(['updated' => $success]);
  }

  public function destroy ($id)
  {
    //DELETE /genres/$id
    $genre = Genre::find($id);
    $genre->delete();
    return Response::json(['deleted' => true]);
  }
}
