@extends('layouts.appnav')
@section('content')
    <center>
    <h2>{{ $playlist->playlist_name }}</h2>

    <ul>
        @foreach ($musics as $music)
        <li> <p style="font-size:20px;"> {{ $music->title }}<form method="POST" action="{{ url('playlist/detail', $music->id ) }}"></p>
            @csrf
            @method('DELETE')
            <br>
            <button class="btn">Delete</button>
        </form></li>
        @endforeach
    </ul>
    </center>
@endsection