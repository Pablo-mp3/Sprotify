<?php
  function getStatValue($tag, $filepath = "Stats.txt") 
  {
    if (!file_exists($filepath)) return null;
    $file = file_get_contents($filepath);
    preg_match("/\[$tag\](.*?)\[\/$tag\]/", $file, $matches);
    return $matches[1] ?? null;
  }
  $Stoday = getStatValue("Stoday");
  $Atoday = getStatValue("Atoday");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Sprotify</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="RepStyle.css">
    <link rel="apple-touch-icon" href="sprotifyLogo.png">
    <link rel="icon" type="image/x-icon" href="sprotifylogo.ico">
  </head>
  <body>
    <!--Main Window-->
    <div class="a w W win l4">
      <div>
        <div title="Made By Pablo">
          <img src="Pablo.jpg" class="q1 l4 t4 a cir">
        </div>
        <h1 class="a x4 l17 t2">Pablo</h1>
        <div class="a l17 t100" title="Copy profile link">
            <a href="" onclick="copyText()">@pablo_mp3</a>
        </div>
        <div class="prof a">
          <h3>About Me</h3>
          <div class="r me bor">
            I just like to listen music.
          </div>
            <!----><h3>Account & Membership</h3>
            Plan type: <span style="color: #ffe30f; font-weight: 800;">Premium</span>
            <br>Payment methods <img src="paypal.png" class="q8"> <img src="visa.png" class="q8"> <img src="mastercard.png" class="q8">
            <br>Manage subscription
            <br>Linked account <img src="apple.png" class="q8"> <img src="google.png" class="q8"> <img src="twitter.png" class="q8">
            <!----><h3>Audio & Playback</h3>
            Crossfade<input type="checkbox" class="toggle r1">
            <br>Gapless playback<input type="checkbox" class="toggle r1">
            <br>Volume level:
            <div class="volume-toggle">
            <div class="track"></div>
            <div class="dot dot1" data-level="quiet"></div>
            <div class="dot dot2" data-level="normal"></div>
            <div class="dot dot3" data-level="loud"></div>
            <div class="knob" id="knob"></div>
            <div class="labels">
              <span id="label-quiet">quiet</span>
              <span id="label-normal">normal</span>
              <span id="label-loud">loud</span>
            </div>
          </div>
          Volume Normalization<input type="checkbox" class="toggle r1">
          <br>Autoplay<input type="checkbox" class="toggle r1">
          <br>Show unplayable songs<input type="checkbox" class="toggle r1">
          <br>Canvas<input type="checkbox" class="toggle r1">
          <!----><h3>Personalization</h3>
          Smart Shuffle<input type="checkbox" class="toggle r1">
          <br>Hide Explict content<input type="checkbox" class="toggle r1">
          <br>Music Language Preferences
          <select name="download">
            <option value="0">English</option>
            <option value="1">Hindi</option>
            <option value="2">Gujarati</option>
          </select>
          <br>Private Session <button id="private">Start</button>
          <!----><h3>Music Settings</h3>
          Theme: <input type="radio" name="theme"><label for="theme">Light</label>
          <input type="radio" name="theme"><label for="theme">Dark</label>
          <input type="radio" name="theme"><label for="theme">System</label>
          <br>Playback quality Wi-Fi 
          <select name="wifiplay">
            <option value="0">Very low</option>
            <option value="1">Low</option>
            <option value="2">Medium</option>
            <option value="3">High</option>
            <option value="4">Very High</option>
            <option value="5">Audiophile</option>
          </select>
          <br>Playback quality Mobile Data 
          <select name="dataplay">
            <option value="0">Very low</option>
            <option value="1">Low</option>
            <option value="2">Medium</option>
            <option value="3">High</option>
            <option value="4">Very High</option>
            <option value="5">Audiophile</option>
          </select>
          <br>Download quality
          <select name="download">
            <option value="0">Very low</option>
            <option value="1">Low</option>
            <option value="2">Medium</option>
            <option value="3">High</option>
            <option value="4">Very High</option>
            <option value="5">Audiophile</option>
          </select>
          <!----><h3>Stats</h3>
          Top Songs: <span style="color: #21c663;"> <?php echo $Stoday; ?> </span>
          <br> Top Artist: <span style="color: #b3041b;"> <?php echo $Atoday; ?> </span>
          <br><a href="Stats.txt" style="color: #007c;">View Full Stats</a>
          <!----><h3>Experimental Features</h3>
          Join Beta: <a href="" style="color: black;">Enable</a>
          <!----><h3>Exit</h3>
          <span style="color: #f00;">Log Out</span>
          <br><span style="color: #f00;">Delete Account</span>
        </div>
      </div>
    </div>
    <!--Player-->
    <div class="a w P win l4">
      <img src="CoverBBM.png" class="a q2 l0 t0">
      <div class="a l9 x3 t1">The Hills</div>
      <div class="a l9 x0 t5">The Weeknd</div>
      <div class="a t6 l29">3:20</div>
      <div class="a prog t4 l29">
        <div class="pFill"></div>
      </div>
      <div class="a t6 r23">-0:42</div>
      <img src="stepFore.svg" class="a r1 t2 q3">
      <img src="play.svg" class="a r2 t2 q3">
      <img src="stepBack.svg" class="a r3 t2 q3">
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
      <div>
        <img src="user-music.svg" class="a q5 t2 c l40">
        <div class="a x1 c t60 l40 b">Profile</div>
      </div>
      <div class="a l40 c sel"></div>
    </div>
    <script src="script.js">
  </body>
</html>