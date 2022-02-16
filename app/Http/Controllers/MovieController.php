<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {
        $movies = (Movie::all());
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->save();

        $genre = Genre::find($request->genre);
        $movie->genres()->attach($genre);

        return redirect()->back();

        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);

        // Movie::create($request->all());
    }

    public function show(Movie $movie)
    {
        //
    }

    public function edit(Movie $movie)
    {
        return view("movies.edit", compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());
        // dd($request);
        return redirect()->back();
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect("movies");
    }
}
