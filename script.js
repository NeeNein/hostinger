const wrapper = document.querySelector(".wrapper");
const carouselcard = document.querySelector(".carouselcard");
const firstCardWidth = carouselcard.querySelector(".card2").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselcardChildrens = [...carouselcard.children];

let isDragging = false,
  isAutoPlay = true,
  startX,
  startScrollLeft,
  timeoutId;

// Get the number of cards that can fit in the carouselcard at once
let cardPerView = Math.round(carouselcard.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carouselcard for infinite scrolling
carouselcardChildrens
  .slice(-cardPerView)
  .reverse()
  .forEach((card2) => {
    carouselcard.insertAdjacentHTML("afterbegin", card2.outerHTML);
  });

// Insert copies of the first few cards to end of carouselcard for infinite scrolling
carouselcardChildrens.slice(0, cardPerView).forEach((card2) => {
  carouselcard.insertAdjacentHTML("beforeend", card2.outerHTML);
});

// Scroll the carouselcard at appropriate postition to hide first few duplicate cards on Firefox
carouselcard.classList.add("no-transition");
carouselcard.scrollLeft = carouselcard.offsetWidth;
carouselcard.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carouselcard left and right
arrowBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    carouselcard.scrollLeft +=
      btn.id == "left" ? -firstCardWidth : firstCardWidth;
  });
});

const dragStart = (e) => {
  isDragging = true;
  carouselcard.classList.add("dragging");
  // Records the initial cursor and scroll position of the carouselcard
  startX = e.pageX;
  startScrollLeft = carouselcard.scrollLeft;
};

const dragging = (e) => {
  if (!isDragging) return; // if isDragging is false return from here
  // Updates the scroll position of the carouselcard based on the cursor movement
  carouselcard.scrollLeft = startScrollLeft - (e.pageX - startX);
};

const dragStop = () => {
  isDragging = false;
  carouselcard.classList.remove("dragging");
};

const infiniteScroll = () => {
  // If the carouselcard is at the beginning, scroll to the end
  if (carouselcard.scrollLeft === 0) {
    carouselcard.classList.add("no-transition");
    carouselcard.scrollLeft =
      carouselcard.scrollWidth - 2 * carouselcard.offsetWidth;
    carouselcard.classList.remove("no-transition");
  }
  // If the carouselcard is at the end, scroll to the beginning
  else if (
    Math.ceil(carouselcard.scrollLeft) ===
    carouselcard.scrollWidth - carouselcard.offsetWidth
  ) {
    carouselcard.classList.add("no-transition");
    carouselcard.scrollLeft = carouselcard.offsetWidth;
    carouselcard.classList.remove("no-transition");
  }

  // Clear existing timeout & start autoplay if mouse is not hovering over carouselcard
  clearTimeout(timeoutId);
  if (!wrapper.matches(":hover")) autoPlay();
};

const autoPlay = () => {
  if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
  // Autoplay the carouselcard after every 2500 ms
  timeoutId = setTimeout(
    () => (carouselcard.scrollLeft += firstCardWidth),
    2500
  );
};
autoPlay();

carouselcard.addEventListener("mousedown", dragStart);
carouselcard.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carouselcard.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);

//ke 2

const wrapper2 = document.querySelector(".wrapper2");
const carouselcard2 = document.querySelector(".carouselcard2");
const firstCardWidth2 = carouselcard2.querySelector(".card2").offsetWidth;
const arrowBtns2 = document.querySelectorAll(".wrapper2 i");
const carouselcardChildrens2 = [...carouselcard2.children];

let isDragging2 = false,
  isAutoPlay2 = true,
  startX2,
  startScrollLeft2,
  timeoutId2;

// Get the number of cards that can fit in the carouselcard at once
let cardPerView2 = Math.round(carouselcard2.offsetWidth / firstCardWidth2);

// Insert copies of the last few cards to beginning of carouselcard for infinite scrolling
carouselcardChildrens2
  .slice(-cardPerView2)
  .reverse()
  .forEach((card2) => {
    carouselcard2.insertAdjacentHTML("afterbegin", card2.outerHTML);
  });

// Insert copies of the first few cards to end of carouselcard for infinite scrolling
carouselcardChildrens2.slice(0, cardPerView2).forEach((card2) => {
  carouselcard2.insertAdjacentHTML("beforeend", card2.outerHTML);
});

// Scroll the carouselcard at appropriate postition to hide first few duplicate cards on Firefox
carouselcard2.classList.add("no-transition");
carouselcard2.scrollLeft = carouselcard2.offsetWidth;
carouselcard2.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carouselcard left and right
arrowBtns2.forEach((btn) => {
  btn.addEventListener("click", () => {
    carouselcard2.scrollLeft +=
      btn.id == "left" ? -firstCardWidth2 : firstCardWidth2;
  });
});

const dragStart2 = (e) => {
  isDragging2 = true;
  carouselcard2.classList.add("dragging");
  // Records the initial cursor and scroll position of the carouselcard
  startX2 = e.pageX;
  startScrollLeft2 = carouselcard2.scrollLeft;
};

const dragging2 = (e) => {
  if (!isDragging2) return; // if isDragging is false return from here
  // Updates the scroll position of the carouselcard based on the cursor movement
  carouselcard2.scrollLeft = startScrollLeft2 - (e.pageX - startX2);
};

const dragStop2 = () => {
  isDragging2 = false;
  carouselcard2.classList.remove("dragging");
};

const infiniteScroll2 = () => {
  // If the carouselcard is at the beginning, scroll to the end
  if (carouselcard2.scrollLeft === 0) {
    carouselcard2.classList.add("no-transition");
    carouselcard2.scrollLeft =
      carouselcard2.scrollWidth - 2 * carouselcard2.offsetWidth;
    carouselcard2.classList.remove("no-transition");
  }
  // If the carouselcard is at the end, scroll to the beginning
  else if (
    Math.ceil(carouselcard2.scrollLeft) ===
    carouselcard2.scrollWidth - carouselcard2.offsetWidth
  ) {
    carouselcard2.classList.add("no-transition");
    carouselcard2.scrollLeft = carouselcard2.offsetWidth;
    carouselcard2.classList.remove("no-transition");
  }

  // Clear existing timeout & start autoplay if mouse is not hovering over carouselcard
  clearTimeout(timeoutId2);
  if (!wrapper2.matches(":hover")) autoPlay2();
};

const autoPlay2 = () => {
  if (window.innerWidth < 800 || !isAutoPlay2) return; // Return if window is smaller than 800 or isAutoPlay is false
  // Autoplay the carouselcard after every 2500 ms
  timeoutId2 = setTimeout(
    () => (carouselcard2.scrollLeft += firstCardWidth2),
    2500
  );
};
autoPlay2();

carouselcard2.addEventListener("mousedown", dragStart2);
carouselcard2.addEventListener("mousemove", dragging2);
document.addEventListener("mouseup", dragStop2);
carouselcard2.addEventListener("scroll", infiniteScroll2);
wrapper2.addEventListener("mouseenter", () => clearTimeout(timeoutId2));
wrapper2.addEventListener("mouseleave", autoPlay2);
