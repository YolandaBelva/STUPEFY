@extends('layouts.appnav')
@section('content')

        <!-- <form action="{{ url('music/edit', $music->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        
            <input name="title" type="text" placeholder="Title" value="{{$music->title}}">
            <input name="artist" type="text" placeholder="Artist" value="{{$music->artist}}">
            <label for="url_music">Masukan Musik</label>
            <input name="url_music" type="file" placeholder="Music Url" value="{{$music->url_music}}">
            <input name="url_image" type="file" placeholder="Choose Image"> 
            <textarea name="lyric" placeholder="Input lyrics in here...">{{$music->title}}</textarea>
            <button type="submit">Submit</button>
        </form> -->
        <center><form action="{{ url('music/edit', $music->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
        <table class="form">
          <tr>
            <td> Song Title : </td>
            <td><input name="title" type="text" placeholder="Title" value="{{$music->title}}"></td>
          </tr>
          <tr>
            <td> Song Artist : </td>
            <td><input name="artist" type="text" placeholder="Artist" value="{{$music->artist}}"></td>
          </tr>
          <tr>
            <td><label for="url_music">Music</label></td>
            <td><input id="url_music" name="url_music" type="file" placeholder="Music Url" value="{{$music->url_music}}"></tr></td>
          <tr>
            <td><label for="url_image">Image</label></td>
            <td><input id="url_image" name="url_image" type="file" placeholder="Choose Image"></tr></td>
          </tr>
          <tr>
            <td> Lyrics : </td>
            <td><textarea name="lyric" placeholder="Input lyrics in here...">{{$music->lyric}}</textarea></td>
          </tr>
        </table>
            <button class="btn" type="submit">Submit</button>
        </form>
</center>
@endsection