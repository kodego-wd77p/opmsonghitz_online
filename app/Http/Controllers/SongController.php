<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\options;
use App\Http\Controllers\Input;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('songs.index');
        $songs = Song::Paginate(5);
        return view('songs.index',[
            'songs' => $songs
        ]);
    }

    public function search(Request $request){
        $songs = Song::where('song_title','like','%' . $request->search . '%')->paginate(5);

        return view('songs.index',[
            'songs' => $songs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedInputs = $request->validate([
            'song_title' => 'required',
            // 'album_title' => 'required',
            'release_year' => 'required',
            'artist' => 'required',
            'image' => 'required',
            'song_file' => 'required'
        ]);

        $validatedInputs['image'] = $request->file('image')->store('public/images');
        $validatedInputs['song_file'] = $request->file('song_file')->store('public/files');






        $song = Song::create([
            'song_title' => $request -> song_title,
            'album_title' => $request -> album_title,
            'release_year' => $request -> release_year,
            'artist' => $request -> artist,
            'image' =>$request -> image,
            'song_file' =>$request -> song_file
        ]);

        return redirect('/songs/'.$song->id)->with('success', 'Song Submitted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $song = Song::find($id);
       return view('songs.show',[
        'song' => $song
       ]);
    }

    public function play($id)
    {
       $song = Song::find($id);
       return view('songs.play',[
        'song' => $song
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id);
        return view('songs.edit', [
            'song' => $song
        ]);
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
        Song::where('id',$id)
        ->update([
            'song_title' => $request->song_title,
            'album_title' => $request->album_title,
            'release_year' => $request->release_year,
            'artist' => $request->artist
        ]);

        return back()->with('success', 'Song Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Song::where('id',$id)->delete();

        return redirect('/songs')->with('success', 'Song Deleted Successfully!');
    }
}
