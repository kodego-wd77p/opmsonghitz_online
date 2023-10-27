@extends('layouts.app')

@section('content')

<div class="media d-flex justify-content-center">
    <div class="d-flex flex-column">
        <div class="d-flex flex-column">
            {{-- <img class="w-100 h-100 d-flex mr-3" data-src="holder.js/64x64?theme=sky" alt="64x64" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18b574a7c16%20text%20%7B%20fill%3A%23FFFFFF%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18b574a7c16%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%230D8FDB%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.173004150390625%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 64px; height: 64px;"> --}}
            <img src="{{asset('/storage/images/'.str_replace("public/","",$song->image))}}" alt="logo" style="width: 300px; height: 300px;">
            <div>
                <div class="media-body">
                    <h5 class="mt-0">{{$song->song_title}}</h5>
                    <h6>{{$song->artist}}</h6>
                      {{$song->album_title}}
                      {{$song->release_year}}
                </div>
            </div>

        </div>
        @auth
        <div>
            <button type="button" onclick='window.location.href = "/songs/{{$song->id}}/edit"' class="m-sm-1 btn btn-secondary">EDIT</button>
            {{-- <form action="/songs/{{$song->id}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" onclick='window.location.href = "/songs/{{$song->id}}"' class="m-sm-1 btn btn-danger">DELETE</button>
            </form> --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Delete
            </button>

  <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Song</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete song: <br>
                            "{{$song->song_title}}"?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <form action="/songs/{{$song->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" onclick='window.location.href = "/songs/{{$song->id}}"' class="m-sm-1 btn btn-danger">Yes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endauth
    </div>
  </div>

@endsection
