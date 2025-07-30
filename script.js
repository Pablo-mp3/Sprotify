fetch('lyrics_hills.txt')
  .then(response => response.text())
  .then(text => {
    const lyricsBox = document.getElementById('lyricsContainer');
    lyricsBox.innerText = text;
    lyricsBox.scrollTop = 7115; //7117 [03:18] I only call you when it's half past five
  });