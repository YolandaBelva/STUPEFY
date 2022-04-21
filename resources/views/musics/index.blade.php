@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
<div class= "center">
          <h1>Listen to Popular Songs</h1>
          <p>You could find a new type of music and listen your favorite music.</p>
  </div>
  <div class="sidebar close">
    <ul class="nav-links">
      <li>
      <a>
          <i class='bx bx-menu' ></i>
          <span class="link_name">STUPEFY</span>
          </a>
      </li> 
      <li>
        <a href="/music/add">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Add Music</span>
        </a> 
      </li>
      <li>
        <a href="/playlist">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Playlist</span>
        </a> 
      </li>
    </ul>
  <section class="home-section">
    <div class="home-content">
  
  <center>
    <br>
<div class="music"> 
  <table class="track">
    <tbody>
      @foreach ($musics as $music)
      <tr class="track-row">
        <td class="track-icon"><i class="fa-solid fa-play"></i></td>
        <td class="track-image"><img class="track-image" src="{{ asset('img/cover/' . $music->url_image) }}"></td>
        <td class="track-title"><a href="/music/detail/{{ $music->id }}">{{ $music->title }}</a></td>
        <td class="track-artist">{{ $music->artist }}</td>
        <td class="track-icon"><a class="btnsize" href="/playlist/add/{{ $music->id }}"><i class="fa-solid fa-plus"></a></i></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</center>
</div>
  </section>
<script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
  let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
  arrowParent.classList.toggle("showMenu");
  });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
</script>



@endsection
</body>
