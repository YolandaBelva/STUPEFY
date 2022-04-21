@extends('layouts.appnav')
@section('content')
        <a href="/playlist/create">Create Playlist</a>

        <ul>
          @foreach ($playlists as $playlist)
          <li>
            <center>
            <table border="2" >
              <tr>
                <td style="min-width:100px;">Playlist</td>
                <td style="min-width:70px;">
                AKSI
                </td>
              </tr>
              <tr>
                <td><a class="btn" href="/playlist/detail/{{ $playlist->id }}"> {{ $playlist->playlist_name }} </a></td>
                <td><a class="btn" href="/playlist/edit/{{ $playlist->id }}">Edit</a><form method="POST" action="{{ url('playlist', $playlist->id ) }}"></td>
              </tr>
            </table>
            </center>
            @csrf
            @method('DELETE')
            <button class="btn">Delete</button>
        </form></li>
          
          @endforeach
        <ul>
@endsection