<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SongController extends Controller
{
    public function create()
    {
        return view('song.create');
    }

    public function store(SongRequest $request)
    {

        if (!$request->filled(['title', 'artist', 'album', 'description'])) {

            return redirect()->route('homepage') // Assicurati che 'homepage' sia il nome corretto della tua rotta
                ->with('error', 'Inserimento fallito, inserisci tutti i campi richiesti!');
        }
        // $song = new Song();
        // $song->title = $request->input('title');
        // $song->artist = $request->input('artist');
        // $song->album = $request->input('album');
        // $song->description = $request->input('description');
        // $song->save();

        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'album' => $request->album,
            'description' => $request->description,

            'img' => $request->file('img') ? $request->file('img')->store('images', 'public') : 'media/default.png'
        ]);


        return redirect()->route('homepage')->with('success', 'La canzone è stata aggiunta con successo!');
    }

    public function index()
    {
        $songs = Song::all();
        // dd($songs);
        return view('song.index', compact('songs'));
    }
}
