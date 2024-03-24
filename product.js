const a = selector => document.querySelector(selector);

function next() {
  /* Adım */
  a(".act").classList.add("prev");
  a(".act").classList.remove("act");

  a(".next").classList.add("act");
  a(".next").classList.remove("next");

  updateBackground(); // Arka plan resmini güncelle
}

function prev() {
  a(".act").classList.add("next");
  a(".act").classList.remove("act");

  a(".prev").classList.add("act");
  a(".prev").classList.remove("prev");

  updateBackground(); // Arka plan resmini güncelle
}

function updateBackground() {
  const actElement = a(".listYaxis .act");
  const backgroundUrl = actElement.style.backgroundImage;
  a(".productBigImgBox").style.backgroundImage = backgroundUrl;
}

slide = element => {
  /* Bir sonraki slayt */
  if (element.classList.contains('next')) {
    next();
  /* Önceki slayt */
  } else if (element.classList.contains('prev')) {
    prev();
  }
}

const slider = a(".list"),
      swipe = new Hammer(a(".swipe"));

slider.onclick = event => {
  slide(event.target);
}

swipe.on("swipeleft", (ev) => {
  next();
});

swipe.on("swiperight", (ev) => {
  prev();
});
