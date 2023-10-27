@extends('layouts.app')

@section('content')
<div class="d-flex flex-column p-5 m-md-5">

    <h1 class="">Songs</h1>
    <div class="d-flex justify-content-md-start m-sm-4 d-inline-block">
        <a href="{{route('song.create')}}"><button type="submit" class="m-sm-1 btn btn-secondary ">Submit A Song</button></a>
    </div>
    <form action="{{route('song.search')}}" method="POST">
        @csrf
        <input type="text" class="form-control" name="search" id="exampleFormControlInput1" placeholder="Search For Songs">
        <button type="submit" class="btn btn-secondary">Search</button>
    </form>
    <p>{{$songs->links()}}</p>
    @if(session('success'))
         <h6 class="alert alert-success">
             {{ session('success')}}
         </h6>
    @endif
    @foreach ($songs as $song)
    <div class="media p-5 d-flex justify-content-start">
            {{-- <img class="d-flex mr-3" data-src="holder.js/64x64?theme=sky" alt="64x64" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18b570d774f%20text%20%7B%20fill%3A%23FFFFFF%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18b570d774f%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%230D8FDB%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.173004150390625%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 64px; height: 64px;"> --}}
            <img src="{{asset('/storage/images/'.str_replace("public/","",$song->image))}}" alt="logo" style="width: 100px; height: 100px;">
        <div class="media-body">
            <h5 class="mt-0">
                <a href="/songs/{{$song->id}}" class="text-decoration-none">{{$song->song_title}}</a>
            </h5>
            <h6>{{$song->artist}}</h6>
            {{$song->album_title}}
            {{$song->release_year}}
        </div>
    </div>
    @endforeach
    <p>{{$songs->links()}}</p>
</div>



    {{-- @foreach ($songs as $song)
        <li>{{$song->id}}</li>
        <li>{{$song->song_title}}</li>
        <li>{{$song->album_title}}</li>
        <li>{{$song->release_year}}</li>
        <li>{{$song->band_id}}</li>
    @endforeach --}}

        {{-- <embed src="{{asset('/assets/'.$song->song_file)}}"> --}}

@endsection
