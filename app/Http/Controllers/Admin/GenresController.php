<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GenresController extends Controller
{
    /**
     * Display a listing of the genres.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genres::all();
        return response()->json($genres, 200);
    }

    /**
     * Store a newly created genre in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:genres,name',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $genre = Genres::create($request->all());
        return response()->json($genre, 201);
    }

    /**
     * Display the specified genre.
     *
     * @param  \App\Models\Genres  $genre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genres::findOrFail($id);
        return response()->json($genre, 200);
    }

    /**
     * Update the specified genre in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genres  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genre = Genres::find($id);

        if (!$genre) {
            return response()->json(['error' => 'Genre not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:genres,name,' . $genre->id,
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $genre->update($request->all());
        return response()->json($genre, 200);
    }

    /**
     * Remove the specified genre from storage.
     *
     * @param  \App\Models\Genres  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $genre = Genres::findOrFail($id);
            $genre->delete();
            return response()->json(['message' => 'Genre deleted successfully'], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Genre not found'], 404);
        }
    }
}
