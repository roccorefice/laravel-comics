<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::latest()->get();
        return view('guests.comics.index', compact('comics'));
    }
}
