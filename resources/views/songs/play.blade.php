@extends('layouts.app')

@section('content')


<div class="p-5 m-md-5">
    <img src="{{asset('/storage/images/'.str_replace("public/","",$song->image))}}" alt="logo" style="width: 100px; height: 100px;">
    <div class="media-body" >
        <h5 class="mt-0">
            {{$song->song_title}}
        </h5>
        <h6>{{$song->artist}}</h6>
        {{$song->album_title}}
        {{$song->release_year}}
    </div>
    <div class="d-flex justify-content-start bd-highlight mb-2" style="width: 100%">
        <br>
        <div style="width: 100%">
           <embed src="{{asset('/storage/files/'.str_replace("public/","",$song->song_file))}}"
            style="width:100%; height:1000px" type="">
        </div>
        <div class="d-flex flex-column" style="width: 100%">
            <div class="bg-light p-2 text-black" style="width:100%; height:60%">
                  <div id="myDIVab" style="display: none">
                    <ins class="scales_chords_api" chord="ab" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ab" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVgsm" style="display: none">
                    <ins class="scales_chords_api" chord="g#m" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g#m" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVab6" style="display: none">
                    <ins class="scales_chords_api" chord="ab6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ab6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVab7" style="display: none">
                    <ins class="scales_chords_api" chord="ab7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ab7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVab9" style="display: none">
                    <ins class="scales_chords_api" chord="ab9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ab9" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVgsm6" style="display: none">
                    <ins class="scales_chords_api" chord="g#m6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g#m6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVgsm7" style="display: none">
                    <ins class="scales_chords_api" chord="g#m7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g#m7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVabM7" style="display: none">
                    <ins class="scales_chords_api" chord="abM7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="abM7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVgsdim" style="display: none">
                    <ins class="scales_chords_api" chord="g#dim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g#dim" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVabsus" style="display: none">
                    <ins class="scales_chords_api" chord="absus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="" instrument="guitar" output="sound"></ins>
                  </div>
{{-- 1st row------------------------------------------------------------------ --}}
                  <div id="myDIVa" style="display: none">
                    <ins class="scales_chords_api" chord="a" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVam" style="display: none">
                    <ins class="scales_chords_api" chord="am" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="am" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVa6" style="display: none">
                    <ins class="scales_chords_api" chord="a6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVa7" style="display: none">
                    <ins class="scales_chords_api" chord="a7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVa9" style="display: none">
                    <ins class="scales_chords_api" chord="a9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a9" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVam6" style="display: none">
                    <ins class="scales_chords_api" chord="am6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="am6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVam7" style="display: none">
                    <ins class="scales_chords_api" chord="am7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="am7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVaM7" style="display: none">
                    <ins class="scales_chords_api" chord="a7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVadim" style="display: none">
                    <ins class="scales_chords_api" chord="adim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="adim" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVasus" style="display: none">
                    <ins class="scales_chords_api" chord="asus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="asus" instrument="guitar" output="sound"></ins>
                  </div>
{{-- 2nd row------------------------------------------------------------------ --}}
                  <div id="myDIVbb" style="display: none">
                    <ins class="scales_chords_api" chord="bb" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbm" style="display: none">
                    <ins class="scales_chords_api" chord="bbm" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbm" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbb6" style="display: none">
                    <ins class="scales_chords_api" chord="bb6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbb7" style="display: none">
                    <ins class="scales_chords_api" chord="bb7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbb9" style="display: none">
                    <ins class="scales_chords_api" chord="bb9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb9" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbm6" style="display: none">
                    <ins class="scales_chords_api" chord="bbm6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbm6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbm7" style="display: none">
                    <ins class="scales_chords_api" chord="bbm7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbm7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbb7" style="display: none">
                    <ins class="scales_chords_api" chord="bb7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbdim" style="display: none">
                    <ins class="scales_chords_api" chord="bbdim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbdim" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbsus" style="display: none">
                    <ins class="scales_chords_api" chord="bbsus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbsus" instrument="guitar" output="sound"></ins>
                  </div>
{{-- 3rd row------------------------------------------------------------------ --}}
                  <div id="myDIVb" style="display: none">
                    <ins class="scales_chords_api" chord="b" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="b" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbm" style="display: none">
                    <ins class="scales_chords_api" chord="bm" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bm" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVb6" style="display: none">
                    <ins class="scales_chords_api" chord="b6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="b6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVb7" style="display: none">
                    <ins class="scales_chords_api" chord="b7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="b7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVb9" style="display: none">
                    <ins class="scales_chords_api" chord="b9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="b9" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbm6" style="display: none">
                    <ins class="scales_chords_api" chord="bm6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bm6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbm7" style="display: none">
                    <ins class="scales_chords_api" chord="bm7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bm7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVb7" style="display: none">
                    <ins class="scales_chords_api" chord="b7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="b7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbdim" style="display: none">
                    <ins class="scales_chords_api" chord="bdim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bdim" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbsus" style="display: none">
                    <ins class="scales_chords_api" chord="bsus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bsus" instrument="guitar" output="sound"></ins>
                  </div>
{{-- 4th row------------------------------------------------------------------ --}}
                <div id="myDIVc" style="display: none">
                    <ins class="scales_chords_api" chord="c" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="c" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVcm" style="display: none">
                    <ins class="scales_chords_api" chord="cm" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="cm" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVc6" style="display: none">
                    <ins class="scales_chords_api" chord="c6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="c6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVc7" style="display: none">
                    <ins class="scales_chords_api" chord="c7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="c7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVc9" style="display: none">
                    <ins class="scales_chords_api" chord="c9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="c9" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVcm6" style="display: none">
                    <ins class="scales_chords_api" chord="cm6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="cm6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVcm7" style="display: none">
                    <ins class="scales_chords_api" chord="cm7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="cm7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVc7" style="display: none">
                    <ins class="scales_chords_api" chord="c7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="c7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVcdim" style="display: none">
                    <ins class="scales_chords_api" chord="cdim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="cdim" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVcsus" style="display: none">
                    <ins class="scales_chords_api" chord="csus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="csus" instrument="guitar" output="sound"></ins>
                </div>
{{-- 5th row------------------------------------------------------------------ --}}
                <div id="myDIVdb" style="display: none">
                    <ins class="scales_chords_api" chord="db" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="db" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVcsm" style="display: none">
                    <ins class="scales_chords_api" chord="c#m" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="c#m" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVdb6" style="display: none">
                    <ins class="scales_chords_api" chord="db6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="db6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVdb7" style="display: none">
                    <ins class="scales_chords_api" chord="db7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="db7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVdb9" style="display: none">
                    <ins class="scales_chords_api" chord="db9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="db9" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVcsm6" style="display: none">
                    <ins class="scales_chords_api" chord="c#m6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="c#m6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVcsm7" style="display: none">
                    <ins class="scales_chords_api" chord="c#m7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="c#m7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVdb7" style="display: none">
                    <ins class="scales_chords_api" chord="db7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="db7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVcsdim" style="display: none">
                    <ins class="scales_chords_api" chord="c#dim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="c#dim" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVdbsus" style="display: none">
                    <ins class="scales_chords_api" chord="dbsus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="dbsus" instrument="guitar" output="sound"></ins>
                </div>

{{-- 6th row------------------------------------------------------------------ --}}

                <div id="myDIVd" style="display: none">
                    <ins class="scales_chords_api" chord="d" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="d" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVdm" style="display: none">
                    <ins class="scales_chords_api" chord="dm" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="dm" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVd6" style="display: none">
                    <ins class="scales_chords_api" chord="d6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="d6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVd7" style="display: none">
                    <ins class="scales_chords_api" chord="d7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="d7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVd9" style="display: none">
                    <ins class="scales_chords_api" chord="d9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="d9" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVdm6" style="display: none">
                    <ins class="scales_chords_api" chord="dm6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="dm6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVdm7" style="display: none">
                    <ins class="scales_chords_api" chord="dm7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="dm7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVd7" style="display: none">
                    <ins class="scales_chords_api" chord="d7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="d7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVddim" style="display: none">
                    <ins class="scales_chords_api" chord="ddim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ddim" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVdsus" style="display: none">
                    <ins class="scales_chords_api" chord="dsus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="dsus" instrument="guitar" output="sound"></ins>
                </div>

{{-- 7th row------------------------------------------------------------------ --}}

                <div id="myDIVeb" style="display: none">
                    <ins class="scales_chords_api" chord="eb" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="eb" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVebm" style="display: none">
                    <ins class="scales_chords_api" chord="ebm" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ebm" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVeb6" style="display: none">
                    <ins class="scales_chords_api" chord="eb6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="eb6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVeb7" style="display: none">
                    <ins class="scales_chords_api" chord="eb7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="eb7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVeb9" style="display: none">
                    <ins class="scales_chords_api" chord="eb9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="eb9" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVebm6" style="display: none">
                    <ins class="scales_chords_api" chord="ebm6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ebm6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVebm7" style="display: none">
                    <ins class="scales_chords_api" chord="ebm7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ebm7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVeb7" style="display: none">
                    <ins class="scales_chords_api" chord="eb7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="eb7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVebdim" style="display: none">
                    <ins class="scales_chords_api" chord="ebdim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ebdim" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVebsus" style="display: none">
                    <ins class="scales_chords_api" chord="ebsus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ebsus" instrument="guitar" output="sound"></ins>
                </div>

{{-- 8th row------------------------------------------------------------------ --}}
                <div id="myDIVe" style="display: none">
                    <ins class="scales_chords_api" chord="e" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="e" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVem" style="display: none">
                    <ins class="scales_chords_api" chord="em" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="em" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVe6" style="display: none">
                    <ins class="scales_chords_api" chord="e6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="e6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVe7" style="display: none">
                    <ins class="scales_chords_api" chord="e7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="e7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVe9" style="display: none">
                    <ins class="scales_chords_api" chord="e9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="e9" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVem6" style="display: none">
                    <ins class="scales_chords_api" chord="em6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="em6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVem7" style="display: none">
                    <ins class="scales_chords_api" chord="em7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="em7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVe7" style="display: none">
                    <ins class="scales_chords_api" chord="e7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="e7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVedim" style="display: none">
                    <ins class="scales_chords_api" chord="edim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="edim" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVesus" style="display: none">
                    <ins class="scales_chords_api" chord="esus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="esus" instrument="guitar" output="sound"></ins>
                </div>

{{-- 9th row------------------------------------------------------------------ --}}

                <div id="myDIVf" style="display: none">
                    <ins class="scales_chords_api" chord="f" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfm" style="display: none">
                    <ins class="scales_chords_api" chord="fm" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="fm" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVf6" style="display: none">
                    <ins class="scales_chords_api" chord="f6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVf7" style="display: none">
                    <ins class="scales_chords_api" chord="f7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVf9" style="display: none">
                    <ins class="scales_chords_api" chord="f9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f9" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfm6" style="display: none">
                    <ins class="scales_chords_api" chord="fm6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="fm6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfm7" style="display: none">
                    <ins class="scales_chords_api" chord="fm7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="fm7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVf7" style="display: none">
                    <ins class="scales_chords_api" chord="f7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfdim" style="display: none">
                    <ins class="scales_chords_api" chord="fdim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="fdim" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfsus" style="display: none">
                    <ins class="scales_chords_api" chord="fsus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="fsus" instrument="guitar" output="sound"></ins>
                </div>

{{-- 10th row------------------------------------------------------------------ --}}
                <div id="myDIVfs" style="display: none">
                    <ins class="scales_chords_api" chord="f#" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f#" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfsm" style="display: none">
                    <ins class="scales_chords_api" chord="f#m" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f#m" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVgb6" style="display: none">
                    <ins class="scales_chords_api" chord="gb6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="gb6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfs7" style="display: none">
                    <ins class="scales_chords_api" chord="f#7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f#7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfs9" style="display: none">
                    <ins class="scales_chords_api" chord="f#9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f#9" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfsm6" style="display: none">
                    <ins class="scales_chords_api" chord="f#m6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f#m6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfsm7" style="display: none">
                    <ins class="scales_chords_api" chord="f#m7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f#m7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVgb7" style="display: none">
                    <ins class="scales_chords_api" chord="gb7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="gb7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVfsdim" style="display: none">
                    <ins class="scales_chords_api" chord="f#dim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="f#dim" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVgbsus" style="display: none">
                    <ins class="scales_chords_api" chord="gbsus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="gbsus" instrument="guitar" output="sound"></ins>
                </div>


{{-- 11th row------------------------------------------------------------------ --}}
                <div id="myDIVg" style="display: none">
                    <ins class="scales_chords_api" chord="g" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVgm" style="display: none">
                    <ins class="scales_chords_api" chord="gm" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="gm" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVg6" style="display: none">
                    <ins class="scales_chords_api" chord="g6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVg7" style="display: none">
                    <ins class="scales_chords_api" chord="g7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVg9" style="display: none">
                    <ins class="scales_chords_api" chord="g9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g9" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVgm6" style="display: none">
                    <ins class="scales_chords_api" chord="gm6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="gm6" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVgm7" style="display: none">
                    <ins class="scales_chords_api" chord="gm7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="gm7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVg7" style="display: none">
                    <ins class="scales_chords_api" chord="g7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g7" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVgdim" style="display: none">
                    <ins class="scales_chords_api" chord="gdim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="gdim" instrument="guitar" output="sound"></ins>
                </div>
                <div id="myDIVgsus" style="display: none">
                    <ins class="scales_chords_api" chord="gsus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="gsus" instrument="guitar" output="sound"></ins>
                </div>

            </div>
            <div class="bg-secondary p-2 d-flex flex-column text-black" style="width:100%; height:40%">

                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="ab()" class="btn btn-light">Ab</button>
                    <button type="button" onclick="gsm()" class="btn btn-light">G#m</button>
                    <button type="button" onclick="ab6()" class="btn btn-light">Ab6</button>
                    <button type="button" onclick="ab7()" class="btn btn-light">Ab7</button>
                    <button type="button" onclick="ab9()" class="btn btn-light">Ab9</button>
                    <button type="button" onclick="gsm6()" class="btn btn-light">G#m6</button>
                    <button type="button" onclick="gsm7()" class="btn btn-light">G#m7</button>
                    <button type="button" onclick="abM7()" class="btn btn-light">AbM7</button>
                    <button type="button" onclick="gsdim()" class="btn btn-light">G#dim</button>
                    <button type="button" onclick="absus()" class="btn btn-light">Absus</button>
                  </div>

                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="a()" class="btn btn-light">A</button>
                    <button type="button" onclick="am()" class="btn btn-light">Am</button>
                    <button type="button" onclick="a6()" class="btn btn-light">A6</button>
                    <button type="button" onclick="a7()" class="btn btn-light">A7</button>
                    <button type="button" onclick="a9()" class="btn btn-light">A9</button>
                    <button type="button" onclick="am6()" class="btn btn-light">Am6</button>
                    <button type="button" onclick="am7()" class="btn btn-light">Am7</button>
                    <button type="button" onclick="aM7()" class="btn btn-light">A7</button>
                    <button type="button" onclick="adim()" class="btn btn-light">Adim</button>
                    <button type="button" onclick="asus()" class="btn btn-light">Asus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="bb()" class="btn btn-light">Bb</button>
                    <button type="button" onclick="bbm()" class="btn btn-light">Bbm</button>
                    <button type="button" onclick="bb6()" class="btn btn-light">Bb6</button>
                    <button type="button" onclick="bb7()" class="btn btn-light">Bb7</button>
                    <button type="button" onclick="bb9()" class="btn btn-light">Bb9</button>
                    <button type="button" onclick="bbm6()" class="btn btn-light">Bbm6</button>
                    <button type="button" onclick="bbm7()" class="btn btn-light">Bbm7</button>
                    <button type="button" onclick="bb7()" class="btn btn-light">Bb7</button>
                    <button type="button" onclick="bbdim()" class="btn btn-light">Bbdim</button>
                    <button type="button" onclick="bbsus()" class="btn btn-light">Bbsus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="b()" class="btn btn-light">B</button>
                    <button type="button" onclick="bm()" class="btn btn-light">Bm</button>
                    <button type="button" onclick="b6()" class="btn btn-light">B6</button>
                    <button type="button" onclick="b7()" class="btn btn-light">B7</button>
                    <button type="button" onclick="b9()" class="btn btn-light">B9</button>
                    <button type="button" onclick="bm6()" class="btn btn-light">Bm6</button>
                    <button type="button" onclick="bm7()" class="btn btn-light">Bm7</button>
                    <button type="button" onclick="b7()" class="btn btn-light">B7</button>
                    <button type="button" onclick="bdim()" class="btn btn-light">Bdim</button>
                    <button type="button" onclick="bsus()" class="btn btn-light">Bsus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="c()" class="btn btn-light">C</button>
                    <button type="button" onclick="cm()" class="btn btn-light">Cm</button>
                    <button type="button" onclick="c6()" class="btn btn-light">C6</button>
                    <button type="button" onclick="c7()" class="btn btn-light">C7</button>
                    <button type="button" onclick="c9()" class="btn btn-light">C9</button>
                    <button type="button" onclick="cm6()" class="btn btn-light">Cm6</button>
                    <button type="button" onclick="cm7()" class="btn btn-light">Cm7</button>
                    <button type="button" onclick="c7()" class="btn btn-light">C7</button>
                    <button type="button" onclick="cdim()" class="btn btn-light">Cdim</button>
                    <button type="button" onclick="csus()" class="btn btn-light">Csus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="db()" class="btn btn-light">Db</button>
                    <button type="button" onclick="csm()" class="btn btn-light">C#m</button>
                    <button type="button" onclick="db6()" class="btn btn-light">Db6</button>
                    <button type="button" onclick="db7()" class="btn btn-light">Db7</button>
                    <button type="button" onclick="db9()" class="btn btn-light">Db9</button>
                    <button type="button" onclick="csm6()" class="btn btn-light">C#m6</button>
                    <button type="button" onclick="csm7()" class="btn btn-light">C#m7</button>
                    <button type="button" onclick="db7()" class="btn btn-light">Db7</button>
                    <button type="button" onclick="csdim()" class="btn btn-light">C#dim</button>
                    <button type="button" onclick="dbsus()" class="btn btn-light">Dbsus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="d()" class="btn btn-light">D</button>
                    <button type="button" onclick="dm()" class="btn btn-light">Dm</button>
                    <button type="button" onclick="d6()" class="btn btn-light">D6</button>
                    <button type="button" onclick="d7()" class="btn btn-light">D7</button>
                    <button type="button" onclick="d9()" class="btn btn-light">D9</button>
                    <button type="button" onclick="dm6()" class="btn btn-light">Dm6</button>
                    <button type="button" onclick="dm7()" class="btn btn-light">Dm7</button>
                    <button type="button" onclick="d7()" class="btn btn-light">D7</button>
                    <button type="button" onclick="ddim()" class="btn btn-light">Ddim</button>
                    <button type="button" onclick="dsus()" class="btn btn-light">Dsus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="eb()" class="btn btn-light">Eb</button>
                    <button type="button" onclick="ebm()" class="btn btn-light">Ebm</button>
                    <button type="button" onclick="eb6()" class="btn btn-light">Eb6</button>
                    <button type="button" onclick="eb7()" class="btn btn-light">Eb7</button>
                    <button type="button" onclick="eb9()" class="btn btn-light">Eb9</button>
                    <button type="button" onclick="ebm6()" class="btn btn-light">Ebm6</button>
                    <button type="button" onclick="ebm7()" class="btn btn-light">Ebm7</button>
                    <button type="button" onclick="eb7()" class="btn btn-light">Eb7</button>
                    <button type="button" onclick="ebdim()" class="btn btn-light">Ebdim</button>
                    <button type="button" onclick="ebsus()" class="btn btn-light">Ebsus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="e()" class="btn btn-light">E</button>
                    <button type="button" onclick="em()" class="btn btn-light">Em</button>
                    <button type="button" onclick="e6()" class="btn btn-light">E6</button>
                    <button type="button" onclick="e7()" class="btn btn-light">E7</button>
                    <button type="button" onclick="e9()" class="btn btn-light">E9</button>
                    <button type="button" onclick="em6()" class="btn btn-light">Em6</button>
                    <button type="button" onclick="em7()" class="btn btn-light">Em7</button>
                    <button type="button" onclick="e7()" class="btn btn-light">E7</button>
                    <button type="button" onclick="edim()" class="btn btn-light">Edim</button>
                    <button type="button" onclick="esus()" class="btn btn-light">Esus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="f()" class="btn btn-light">F</button>
                    <button type="button" onclick="fm()" class="btn btn-light">Fm</button>
                    <button type="button" onclick="f6()" class="btn btn-light">F6</button>
                    <button type="button" onclick="f7()" class="btn btn-light">F7</button>
                    <button type="button" onclick="f9()" class="btn btn-light">F9</button>
                    <button type="button" onclick="fm6()" class="btn btn-light">Fm6</button>
                    <button type="button" onclick="fm7()" class="btn btn-light">Fm7</button>
                    <button type="button" onclick="f7()" class="btn btn-light">F7</button>
                    <button type="button" onclick="fdim()" class="btn btn-light">Fdim</button>
                    <button type="button" onclick="fsus()" class="btn btn-light">Fsus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="fs()" class="btn btn-light">F#</button>
                    <button type="button" onclick="fsm()" class="btn btn-light">F#m</button>
                    <button type="button" onclick="gb6()" class="btn btn-light">Gb6</button>
                    <button type="button" onclick="fs7()" class="btn btn-light">F#7</button>
                    <button type="button" onclick="fs9()" class="btn btn-light">F#9</button>
                    <button type="button" onclick="fsm6()" class="btn btn-light">F#m6</button>
                    <button type="button" onclick="fsm7()" class="btn btn-light">F#m7</button>
                    <button type="button" onclick="gb7()" class="btn btn-light">Gb7</button>
                    <button type="button" onclick="fsdim()" class="btn btn-light">F#dim</button>
                    <button type="button" onclick="gbsus()" class="btn btn-light">Gbsus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="g()" class="btn btn-light">G</button>
                    <button type="button" onclick="gm()" class="btn btn-light">Gm</button>
                    <button type="button" onclick="g6()" class="btn btn-light">G6</button>
                    <button type="button" onclick="g7()" class="btn btn-light">G7</button>
                    <button type="button" onclick="g9()" class="btn btn-light">G9</button>
                    <button type="button" onclick="gm6()" class="btn btn-light">Gm6</button>
                    <button type="button" onclick="gm7()" class="btn btn-light">Gm7</button>
                    <button type="button" onclick="g7()" class="btn btn-light">G7</button>
                    <button type="button" onclick="gdim()" class="btn btn-light">Gdim</button>
                    <button type="button" onclick="gsus()" class="btn btn-light">Gsus</button>
                  </div>

                  <script>

                function gsus() {
                    var x = document.getElementById("myDIVgsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function gdim() {
                    var x = document.getElementById("myDIVgdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function g7() {
                    var x = document.getElementById("myDIVg7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function gm7() {
                    var x = document.getElementById("myDIVgm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function gm6() {
                    var x = document.getElementById("myDIVgm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function g9() {
                    var x = document.getElementById("myDIVg9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function g7() {
                    var x = document.getElementById("myDIVg7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function g6() {
                    var x = document.getElementById("myDIVg6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function gm() {
                    var x = document.getElementById("myDIVgm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

            function g() {
                    var x = document.getElementById("myDIVg");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 11th row------------------------------------------------------------------

            function gbsus() {
                    var x = document.getElementById("myDIVgbsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function fsdim() {
                    var x = document.getElementById("myDIVfsdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function gb7() {
                    var x = document.getElementById("myDIVgb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function fsm7() {
                    var x = document.getElementById("myDIVfsm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function fs9() {
                    var x = document.getElementById("myDIVfs9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function fs7() {
                    var x = document.getElementById("myDIVfs7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function gb6() {
                    var x = document.getElementById("myDIVgb6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function fs() {
                    var x = document.getElementById("myDIVfs");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 10th row------------------------------------------------------------------

                function fsus() {
                    var x = document.getElementById("myDIVfsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function fdim() {
                    var x = document.getElementById("myDIVfdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function f7() {
                    var x = document.getElementById("myDIVf7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function fm7() {
                    var x = document.getElementById("myDIVfm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function fm6() {
                    var x = document.getElementById("myDIVfm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function f9() {
                    var x = document.getElementById("myDIVf9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function f7() {
                    var x = document.getElementById("myDIVf7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function f6() {
                    var x = document.getElementById("myDIVf6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function fm() {
                    var x = document.getElementById("myDIVfm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function f() {
                    var x = document.getElementById("myDIVf");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 9th row------------------------------------------------------------------

                function esus() {
                    var x = document.getElementById("myDIVesus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function edim() {
                    var x = document.getElementById("myDIVedim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function e7() {
                    var x = document.getElementById("myDIVe7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function em7() {
                    var x = document.getElementById("myDIVem7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function em6() {
                    var x = document.getElementById("myDIVem6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function e9() {
                    var x = document.getElementById("myDIVe9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function e7() {
                    var x = document.getElementById("myDIVe7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function e6() {
                    var x = document.getElementById("myDIVe6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function em() {
                    var x = document.getElementById("myDIVem");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function e() {
                    var x = document.getElementById("myDIVe");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 8th row------------------------------------------------------------------

                function ebsus() {
                    var x = document.getElementById("myDIVebsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function ebdim() {
                    var x = document.getElementById("myDIVebdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function eb7() {
                    var x = document.getElementById("myDIVeb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function ebm7() {
                    var x = document.getElementById("myDIVebm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function ebm6() {
                    var x = document.getElementById("myDIVebm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function eb9() {
                    var x = document.getElementById("myDIVeb9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function eb7() {
                    var x = document.getElementById("myDIVeb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function eb6() {
                    var x = document.getElementById("myDIVeb6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function ebm() {
                    var x = document.getElementById("myDIVebm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function eb() {
                    var x = document.getElementById("myDIVeb");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 7th row------------------------------------------------------------------

                function dsus() {
                    var x = document.getElementById("myDIVdsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function ddim() {
                    var x = document.getElementById("myDIVddim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function d7() {
                    var x = document.getElementById("myDIVd7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function dm7() {
                    var x = document.getElementById("myDIVdm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function dm6() {
                    var x = document.getElementById("myDIVdm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function d9() {
                    var x = document.getElementById("myDIVd9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function d7() {
                    var x = document.getElementById("myDIVd7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function d6() {
                    var x = document.getElementById("myDIVd6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function dm() {
                    var x = document.getElementById("myDIVdm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function d() {
                    var x = document.getElementById("myDIVd");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 6th row------------------------------------------------------------------

                function dbsus() {
                    var x = document.getElementById("myDIVdbsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function csdim() {
                    var x = document.getElementById("myDIVcsdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function db7() {
                    var x = document.getElementById("myDIVdb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function csm7() {
                    var x = document.getElementById("myDIVcsm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function csm6() {
                    var x = document.getElementById("myDIVcsm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function db9() {
                    var x = document.getElementById("myDIVdb9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function db7() {
                    var x = document.getElementById("myDIVdb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function db6() {
                    var x = document.getElementById("myDIVdb6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function csm() {
                    var x = document.getElementById("myDIVcsm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function db() {
                    var x = document.getElementById("myDIVdb");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 5th row------------------------------------------------------------------

                function csus() {
                    var x = document.getElementById("myDIVcsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function cdim() {
                    var x = document.getElementById("myDIVcdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function c7() {
                    var x = document.getElementById("myDIVc7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function cm7() {
                    var x = document.getElementById("myDIVcm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function cm6() {
                    var x = document.getElementById("myDIVcm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function c9() {
                    var x = document.getElementById("myDIVc9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function c7() {
                    var x = document.getElementById("myDIVc7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function cm() {
                    var x = document.getElementById("myDIVcm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function c() {
                    var x = document.getElementById("myDIVc");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 4th row------------------------------------------------------------------
                function bsus() {
                    var x = document.getElementById("myDIVbsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                function bdim() {
                    var x = document.getElementById("myDIVbdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function b7() {
                    var x = document.getElementById("myDIVb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bm7() {
                    var x = document.getElementById("myDIVbm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bm6() {
                    var x = document.getElementById("myDIVbm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function b9() {
                    var x = document.getElementById("myDIVb9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function b7() {
                    var x = document.getElementById("myDIVb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function b6() {
                    var x = document.getElementById("myDIVb6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bm() {
                    var x = document.getElementById("myDIVbm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function b() {
                    var x = document.getElementById("myDIVb");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 3rd row------------------------------------------------------------------
                  function bbsus() {
                    var x = document.getElementById("myDIVbbsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bbdim() {
                    var x = document.getElementById("myDIVbbdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb7() {
                    var x = document.getElementById("myDIVbb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bbm7() {
                    var x = document.getElementById("myDIVbbm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bbm6() {
                    var x = document.getElementById("myDIVbbm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb9() {
                    var x = document.getElementById("myDIVbb9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb7() {
                    var x = document.getElementById("myDIVbb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb6() {
                    var x = document.getElementById("myDIVbb6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bbm() {
                    var x = document.getElementById("myDIVbbm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb() {
                    var x = document.getElementById("myDIVbb");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 2nd row------------------------------------------------------------------
                  function asus() {
                    var x = document.getElementById("myDIVasus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function adim() {
                    var x = document.getElementById("myDIVadim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function aM7() {
                    var x = document.getElementById("myDIVaM7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function am7() {
                    var x = document.getElementById("myDIVam7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function am6() {
                    var x = document.getElementById("myDIVam6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function a9() {
                    var x = document.getElementById("myDIVa9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function a7() {
                    var x = document.getElementById("myDIVa7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function a6() {
                    var x = document.getElementById("myDIVa6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function am() {
                    var x = document.getElementById("myDIVam");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function a() {
                    var x = document.getElementById("myDIVa");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }
// 1st row------------------------------------------------------------------
                  function absus() {
                    var x = document.getElementById("myDIVabsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function gsdim() {
                    var x = document.getElementById("myDIVgsdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function abM7() {
                    var x = document.getElementById("myDIVabM7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function gsm7() {
                    var x = document.getElementById("myDIVgsm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function gsm6() {
                    var x = document.getElementById("myDIVgsm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function ab9() {
                    var x = document.getElementById("myDIVab9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function ab7() {
                    var x = document.getElementById("myDIVab7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function ab6() {
                    var x = document.getElementById("myDIVab6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function gsm() {
                    var x = document.getElementById("myDIVgsm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function ab() {
                    var x = document.getElementById("myDIVab");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }
                  </script>

            </div>
        </div>
    </div>
</div>


@endsection
