<?php

namespace App\Http\Controllers;

use App\Models\CharacteristicCategory;

class PublicCharacteristicController extends Controller
{
    public function index()
    {
        $categories = CharacteristicCategory::with('characteristics')->get();

        return view('characteristics.index', compact('categories'));
    }
}
