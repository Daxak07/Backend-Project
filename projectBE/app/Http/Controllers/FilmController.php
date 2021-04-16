<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        return view('film_add');
    }

    public function store(Request $request)
    {
        $film = new Film();
        $film->title = $request->input('title');
        $film->duration = $request->input('duration');
        $film->description = $request->input('description');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('/uploads', $filename);
            $film->image = $filename;
        } else {
            return $request;
            $film->image = '';
        }

        $film->save();

        return redirect()->route('film_add')->with('film', $film)->with('Success','You have successfully upload film :).');
    }
}
