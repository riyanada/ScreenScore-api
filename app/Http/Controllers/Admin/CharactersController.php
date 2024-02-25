<?php

namespace App\Http\Controllers\Admin;

use App\Models\Characters;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CharactersController extends Controller
{
    /**
     * Display a listing of the characters.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Characters::all();
        return response()->json($characters, 200);
    }

    /**
     * Store a newly created character in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'film_id' => 'required|exists:films,id',
            'cast_id' => 'required|exists:casts,id',
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $character = Characters::create($request->all());
        return response()->json($character, 201);
    }

    /**
     * Display the specified character.
     *
     * @param  \App\Models\Characters  $character
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chara = Characters::find($id);

        if (!$chara) {
            return response()->json(['error' => 'Characters not found'], 404);
        }
        return response()->json($chara, 200);
    }

    /**
     * Update the specified character in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Characters  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chara = Characters::find($id);

        if (!$chara) {
            return response()->json(['error' => 'Characters not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'film_id' => 'required|exists:films,id',
            'cast_id' => 'required|exists:casts,id',
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $chara->update($request->all());
        return response()->json($chara, 200);
    }

    /**
     * Remove the specified character from storage.
     *
     * @param  \App\Models\Characters  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chara = Characters::find($id);

        if (!$chara) {
            return response()->json(['error' => 'Characters not found'], 404);
        }
        $chara->delete();
        return response()->json(['message' => 'Character deleted successfully'], 200);
    }
}

