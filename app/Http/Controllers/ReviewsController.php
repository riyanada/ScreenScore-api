<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Models\Films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Reviews::all();
        return response()->json($reviews, 200);
    }

    public function show($id)
    {
        $review = Reviews::findOrFail($id);
        return response()->json($review, 200);
    }

    public function store(Request $request, $idFilms)
    {
        $films = Films::find($idFilms);

        if (!$films) {
            return response()->json(['error' => 'Films not found'], 404);
        }

        $reviewData = [
            'user_id' => Auth::user()->id,
            'film_id' => $idFilms,
            'ulasan' => $request->input('ulasan'),
            'rating' => $request->input('rating'),
        ];

        $validator = Validator::make($reviewData, [
            'film_id' => [
                'required',
                Rule::unique('reviews')->where(function ($query) use ($reviewData) {
                    return $query->where('user_id', $reviewData['user_id']);
                }),
            ],
            'ulasan' => 'required|string',
            'rating' => 'required|numeric|min:0|max:5',
        ], [
            'film_id.unique' => 'This film has already been reviewed by the user.',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $customErrors = $errors->toArray();
            if (isset($customErrors['film_id'])) {
                $customErrors['message'] = implode(' ', $customErrors['film_id']);
                unset($customErrors['film_id']);
            }
            return response()->json($customErrors, 400);
        }

        $review = Reviews::create($reviewData);

        $newAvgRating = $films->reviews()->avg('rating');

        $films->avg_ratings = $newAvgRating;
        $films->save();

        return response()->json($review, 201);
    }

    public function update(Request $request, $idFilms)
    {
        $films = Films::find($idFilms);

        if (!$films) {
            return response()->json(['error' => 'Films not found'], 404);
        }

        // Dapatkan ulasan (review) berdasarkan pengguna yang saat ini masuk (authenticated user) dan ID film
        $review = Reviews::where('film_id', $idFilms)
            ->where('user_id', Auth::user()->id)
            ->first();

        if (!$review) {
            return response()->json(['error' => 'Review not found'], 404);
        }

        // Validasi data ulasan yang diubah
        $validator = Validator::make($request->all(), [
            'ulasan' => 'required|string',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Perbarui data ulasan
        $review->ulasan = $request->input('ulasan');
        $review->rating = $request->input('rating');
        $review->save();

        return response()->json(['success' => true, 'message' => 'Review updated successfully', 'review' => $review], 200);
    }

    public function destroy($id)
    {
        $review = Reviews::findOrFail($id);
        $review->delete();
        return response()->json(['message' => 'Reviews deleted successfully'], 200);
    }
}
