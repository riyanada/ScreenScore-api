<?php

namespace App\Http\Controllers\Admin;

use App\Models\Casts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CastsController extends Controller
{
    public function index()
    {
        $genres = Casts::all();
        return response()->json($genres, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'age' => 'required|integer',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string',
            'bio' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $cast = Casts::create($request->all());
        return response()->json($cast, 201);
    }

    public function show($id)
    {
        $cast = Casts::find($id);

        if (!$cast) {
            return response()->json(['error' => 'Casts not found'], 404);
        }
        return response()->json($cast, 200);
    }


    public function update(Request $request, $id)
    {
        $cast = Casts::find($id);

        if (!$cast) {
            return response()->json(['error' => 'Casts not found'], 404);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'age' => 'required|integer',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string',
            'bio' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $cast->update($request->all());
        return response()->json($cast, 200);
    }

    public function destroy($id)
    {
        $cast = Casts::findOrFail($id);
        $cast->delete();
        return response()->json(['message' => 'Cast deleted successfully'], 200);
    }
}
