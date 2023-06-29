<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    public function index() {
        return view("comics.index");
    }

    public function show($id) {

        $comic = Comic::findOrFail($id);

        return view("comics.show", compact("comic"));
    }
}