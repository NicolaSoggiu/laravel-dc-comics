<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "thumb"         => "required|string",
            "title"         => "required|string|max:50",
            "description"   => "required|string",
            "price"         => "required|string|max:10",
            "series"        => "required|string|max:50",
            "type"          => "required|string|max:20",
            "sale_date"     => "required|string|max:20",
    
            ]);
        
        $data = $request->all();


        // PRIMO METODO
        $newComic = new Comic();
        $newComic->thumb = $data["thumb"];
        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->price = $data["price"];
        $newComic->series = $data["series"];
        $newComic->type = $data["type"];
        $newComic->sale_date = $data["sale_date"];
        $newComic->save();

        // SECONDO METODO
        // $newComic = Comic::create($data);

        return redirect()->route("comics.show", ["comic" =>$newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}