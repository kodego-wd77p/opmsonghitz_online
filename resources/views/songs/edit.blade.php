@extends('layouts.app')

@section('content')
<div class="d-flex flex-column p-5 m-md-5">
    <div class="card">
        <div class="card">
            <div class="card-header">
                <h1>Edit Song Details</h1>
            </div>
            <div class="card-body">
                <form action="/songs/{{$song->id}}/edit" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="formGroupExampleInput">Artist</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="artist" placeholder="Input Name" value={{ old('artist',$song->artist) }}>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Song Title</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="song_title" placeholder="Input Title" value={{ old('song_title',$song->song_title)}}>
                        @error('song_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Album Title</label>
                      <input type="text" class="form-control" id="formGroupExampleInput2" name="album_title" placeholder="Input Title - Optional" value={{ old('album_title',$song->album_title) }}>
                        {{-- @error('album_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Release Year</label>
                      <input type="number" class="form-control" id="formGroupExampleInput2" name="release_year" placeholder="Input Year" value={{ old('release_year',$song->release_year) }}>
                        @error('release_year')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-md-center m-sm-4 d-inline-block">
                        <button type="button" onclick='window.location.href = "/songs"' class="m-sm-1 btn btn-danger">CANCEL</button>
                        <button type="submit" class="m-sm-1 btn btn-secondary ">UPDATE</button>
                    </div>
                </form>
                @if(session('success'))
                <h6 class="alert alert-success">
                    {{ session('success')}}
                </h6>
                @endif
            </div>
          </div>
    </div>
</div>



    {{-- @foreach ($songs as $song)
        <li>{{$song->id}}</li>
        <li>{{$song->song_title}}</li>
        <li>{{$song->album_title}}</li>
        <li>{{$song->release_year}}</li>
        <li>{{$song->band_id}}</li>
    @endforeach --}}

@endsection
