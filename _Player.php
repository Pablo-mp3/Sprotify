<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player - Sprotify</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="RepStyle.css">
    <link rel="apple-touch-icon" href="sprotifyLogo.png">
    <link rel="icon" type="image/x-icon" href="sprotifylogo.ico">
  </head>
  <body>
    <!--Player-->
    <div class="l4 a win w p">
      <!-- Playing stuff-->
      <img src="CoverBBM.png" class="a t4 q0 l36">
      <div class="a c l108 x6 t69">
        The Hills
      </div>
      <div class="a c l108 x30 t15">
        The Weeknd
      </div>
      <div class="a c l108">
        <div class="a t22 l-26">3:20</div>
        <div class="a progg t24 c">
          <div class="pFill"></div>
        </div>
        <div class="a t22 l26">-0:42</div>
      </div>
      <div class="a c l108 x30 t30">
        <img src="stepBack.svg" class="q6">
        <img src="play.svg" class="q6 pd">
        <img src="stepFore.svg" class="q6">
      </div>
      <!--The lyrics box-->
      <h3 class="a t45 l36">Lyrics</h3>
      <div class="a c l90 bor lyrics">
        <div class="a t10 ly" id="lyricsContainer"></div>
      </div>
      <!--Next in Queue-->
      <h3 class="a t57 l36">Up Next</h3>
      <div class="a c l90 bor queue">
        <img src="CoverAfHo.png" class="a l1 t10 q7">
        <div class="a l11 x3 t6">Until I Bleed Out</div>
        <div class="a l11 x0 t60">The Weeknd</div>
      </div>
    </div>
    <!--Navigation Bar-->
    <div class="a w navBar">
      <a href="index.html"><div>
        <img src="house-window.svg" class="a q5 t2 l45 c">
        <div class="a x1 c t60 l45 b">Home</div>
      </div></a>
      <a href="isearch.html"><div>
        <img src="search.svg" class="a q5 t2 l13 c">
        <div class="a x1 c t60 l13 b">Search</div>
      </div></a>
      <a href="iplayer.html"><div>
        <img src="playCircle.svg" class="a q4 c t6 l22">
      </div></a>
      <a href="ilibrary.html"><div>
        <img src="folder-music.svg" class="a q5 t2 c l31">
        <div class="a x1 c t60 l31 b">Library</div>
      </div></a>
      <a href="iprofile.php"><div>
        <img src="user-music.svg" class="a q5 t2 c l40">
        <div class="a x1 c t60 l40 b">Profile</div>
      </div></a>
      <div class="a l22 c sel"></div>
    </div>
    <script src="script.js"></script>
  </body>
</html>