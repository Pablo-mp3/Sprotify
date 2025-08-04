fetch('lyrics_hills.txt')
  .then(response => response.text())
  .then(text => {
    const lyricsBox = document.getElementById('lyricsContainer');
    lyricsBox.innerText = text;
    lyricsBox.scrollTop = 7115; //7117 [03:18] I only call you when it's half past five
  });

function copyText()
{
  const profile = "www.sprotify.com/pablo_com";
  navigator.clipboard.writeText(profile)
}

document.addEventListener("DOMContentLoaded", () => {
  const knob = document.getElementById('knob');
  const dots = document.querySelectorAll('.dot');
  const labels = {
    quiet: document.getElementById('label-quiet'),
    normal: document.getElementById('label-normal'),
    loud: document.getElementById('label-loud'),
  };

  const positions = {
    quiet: '0%',
    normal: '50%',
    loud: '100%',
  };

  let currentVolume = 'normal';

  function setVolume(level) {
    currentVolume = level;
    knob.style.left = positions[level];

    // Update labels
    for (let key in labels) {
      labels[key].classList.remove('active-label');
    }
    labels[level].classList.add('active-label');

    console.log(`Volume set to: ${level}`);
  }

  // Initial position
  setVolume('normal');

  // Add click events
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      const level = dot.dataset.level;
      setVolume(level);
    });
  });
});

const private = document.getElementById("private");

private.addEventListener("click", () => {
  if (private.innerText === "Start") {
    private.innerText = "Stop";
    private.classList.add("active");
  } else {
    private.innerText = "Start";
    private.classList.remove("active");
  }
});
