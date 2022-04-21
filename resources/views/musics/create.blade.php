@extends('layouts.appnav')
@section('content')

<center><h1>Add Music</h1>
        <form action="{{ url('music/add') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <table class="form">
          <tr>
            <td> Song Title : </td>
            <td><input name="title" type="text" placeholder="Title"></td>
          </tr>
          <tr>
            <td> Song Artist : </td>
            <td><input name="artist" type="text" placeholder="Artist"></td>
          </tr>
          <tr>
            <td><label for="url_music">Music</label></td>
            <td><input id="url_music" name="url_music" type="file" placeholder="Music Url"></tr></td>
          <tr>
            <td><label for="url_image">Image</label></td>
            <td><input id="url_image" name="url_image" type="file" placeholder="Choose Image"></tr></td>
          </tr>
          <tr>
            <td> Lyrics : </td>
            <td><textarea name="lyric" placeholder="Input lyrics in here..."></textarea></td>
          </tr>
        </table>
            <button class="btn" type="submit">Submit</button>
        </form>
</center>
@endsection