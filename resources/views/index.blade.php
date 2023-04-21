<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<title>WITBLOG</title>
</head>
<body>
<div class="content">
 <h1>WITBLOG.</h1>
 <p>Can link different social media accounts to their Witblog account</p>
</div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <a href="witblog">
    <img class="images" src="{{ asset('images/witblog-image.png') }}">
  </div>

  <div class="mySlides fade">
    <img class="images" src="{{ asset('images/witblog-image.png') }}">
  </div>

  <div class="mySlides fade">
    <img class="images" src="{{ asset('images/witblog-image.png') }}">
  </div>
</div>
</a>
<br><br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>