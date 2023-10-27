@extends('layouts.app')

@section('content')
<div class="d-flex flex-column p-5 m-md-5">
    <div class="card">
        <div class="card">
            <div class="card-header">
                <h1>Submit A New Song</h1>
            </div>
            <div class="card-body">
                <form action="{{route('song.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group">
                      <label for="formGroupExampleInput">Artist</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="artist" placeholder="Input Name" value={{ old('artist') }}>
                        @error('artist')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Song Title</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="song_title" placeholder="Input Title" value={{ old('song_title') }}>
                        @error('song_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Album Title</label>
                      <input type="text" class="form-control" id="formGroupExampleInput2" name="album_title" placeholder="Input Title - Optional" value={{ old('album_title') }}>
                        {{-- @error('album_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Release Year</label>
                      <input type="number" class="form-control" id="formGroupExampleInput2" name="release_year" placeholder="Input Year" value={{ old('release_year') }}>
                        @error('release_year')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Choose An Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Choose A PDF File</label>
                        <input class="form-control" type="file" id="formFile" name="song_file">
                        @error('song_file')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-md-center m-sm-4 d-inline-block">
                        <button type="button" onclick='window.location.href = "/songs"' class="m-sm-1 btn btn-danger">CANCEL</button>
                        <button type="submit" class="m-sm-1 btn btn-secondary ">SUBMIT</button>
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
