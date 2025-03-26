<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function change(Request $request)
    {
        session()->put('locale', $request->lang);
        return response()->json(['message' => 'Limba a fost schimbată cu succes!']);
    }
}
