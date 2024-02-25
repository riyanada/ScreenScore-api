<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Films;
use App\Models\Genres;
use App\Models\FilmGenres;
use App\Http\Controllers\Controller;


class FilmsController extends Controller
{

    public function index()
    {
        $films = Films::all();
        return response()->json($films, 200);
    }

    public function image($imageName)
    {
        $imagePath = storage_path('uploads/image/poster') . '/' . $imageName;
        if (file_exists($imagePath)) {
            $file = file_get_contents($imagePath);
            return response($file, 200)->header('Content-Type', 'image/jpeg');
        }

        return response()->json(array("message" => "Image not Found", "path" => $imagePath), 401);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'director' => 'required|string',
            'ringkasan' => 'required|string',
            'tahun' => 'required|integer',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'avg_ratings' => 'required|numeric',
            'genre_id' => 'required|array',
            'genre_id.*' => 'required|exists:genres,id'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $filmData = [
            'judul' => $request->input('judul'),
            'director' => $request->input('director'),
            'ringkasan' => $request->input('ringkasan'),
            'tahun' => $request->input('tahun'),
            'avg_ratings' => $request->input('avg_ratings'),
            'poster' => $request->input('poster'),
            'user_id' => Auth::user()->id,
        ];

        if ($request->hasFile('poster')) {
            $filmData['poster'] = $this->uploadPoster($request->file('poster'));
        }

        $newFilm = Films::create($filmData);

        $filmGenre = [
            'genre_id' => $request->input('genre_id'),
            'film_id' => $newFilm->id
        ];

        $filmGenres = [];

        foreach ($request->input('genre_id') as $genreId) {
            $filmGenre = [
                'genre_id' => $genreId,
                'film_id' => $newFilm->id
            ];
            FilmGenres::create($filmGenre);

            $filmGenres[] = $filmGenre;
        }

        return response()->json([
            'success' => true,
            'message' => 'Film created successfully',
            'film' => $newFilm,
            'film_genres' => $filmGenres
        ], 200);
    }

    private function uploadPoster($image)
    {
        $imageName = time() . '_' . uniqid();
        $imagePath = 'uploads/image/poster/';

        $image->move(storage_path($imagePath), $imageName);

        return $imageName;
    }

    public function show($id)
    {
        $film = Films::findOrFail($id);
        return response()->json($film, 200);
    }

    public function showOnGenres($id)
    {
        $film = Films::with('genres')->findOrFail($id);
        return response()->json($film, 200);
    }

    public function showOnCasts($id)
    {
        $film = Films::with('casts', 'characters')->findOrFail($id);
        return response()->json($film, 200);
    }
    
    public function showAllRatings()
    {
        $reviews = Films::with('reviews')->get();
        return response()->json($reviews, 200);
    }

    public function update(Request $request, $id)
    {
        $film = Films::find($id);

        if (!$film) {
            return response()->json(['error' => 'Film not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'director' => 'required|string',
            'ringkasan' => 'required|string',
            'tahun' => 'required|integer',
            'poster' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'avg_ratings' => 'required|numeric',
            'genre_id' => 'array',
            'genre_id.*' => 'exists:genres,id'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $filmData = [
            'judul' => $request->input('judul'),
            'director' => $request->input('director'),
            'ringkasan' => $request->input('ringkasan'),
            'tahun' => $request->input('tahun'),
            'avg_ratings' => $request->input('avg_ratings'),
            'user_id' => Auth::user()->id,
        ];

        if ($request->hasFile('poster')) {
            $filmData['poster'] = $this->uploadPoster($request->file('poster'));
        }

        $film->update($filmData);
        if ($request->has('genre_id')) {
            $film->genres()->detach(); // Menghapus semua relasi yang ada

            $attachedGenres = [];
            foreach ($request->input('genre_id') as $genreId) {
                $film->genres()->attach($genreId); // Menambahkan relasi baru
                $genre = Genres::find($genreId);
                $attachedGenres[] = [
                    'id' => $genre->id,
                    'name' => $genre->name,
                    'status' => 'attached' // Menandai bahwa genre ini telah dilampirkan
                ];
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Film updated successfully',
            'film' => $film,
            'attached_genres' => $attachedGenres // Menampilkan hasil dari foreach
        ], 200);
    }

    public function destroy($id)
    {
        try {
            $film = Films::findOrFail($id);
            $film->delete();
            return response()->json(['message' => 'Film deleted successfully'], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Film not found'], 404);
        }
    }
}
