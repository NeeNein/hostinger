const wrapperbest = document.querySelector(".wrapperbest");
const carouselbest = document.querySelector(".carouselbest");
const firstCardWidth = carouselbest.querySelector(".cardbest").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapperbest i");
const carouselChildrens = [...carouselbest.children];

let isDragging = false,
  isAutoPlay = true,
  startX,
  startScrollLeft,
  timeoutId;

// Get the number of cards that can fit in the carouselbest at once
let cardPerView = Math.round(carouselbest.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carouselbest for infinite scrolling
carouselChildrens
  .slice(-cardPerView)
  .reverse()
  .forEach((cardbest) => {
    carouselbest.insertAdjacentHTML("afterbegin", cardbest.outerHTML);
  });

// Insert copies of the first few cards to end of carouselbest for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach((cardbest) => {
  carouselbest.insertAdjacentHTML("beforeend", cardbest.outerHTML);
});

// Scroll the carouselbest at appropriate postition to hide first few duplicate cards on Firefox
carouselbest.classList.add("no-transition");
carouselbest.scrollLeft = carouselbest.offsetWidth;
carouselbest.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carouselbest left and right
arrowBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    carouselbest.scrollLeft +=
      btn.id == "left" ? -firstCardWidth : firstCardWidth;
  });
});

const dragStart = (e) => {
  isDragging = true;
  carouselbest.classList.add("dragging");
  // Records the initial cursor and scroll position of the carouselbest
  startX = e.pageX;
  startScrollLeft = carouselbest.scrollLeft;
};

const dragging = (e) => {
  if (!isDragging) return; // if isDragging is false return from here
  // Updates the scroll position of the carouselbest based on the cursor movement
  carouselbest.scrollLeft = startScrollLeft - (e.pageX - startX);
};

const dragStop = () => {
  isDragging = false;
  carouselbest.classList.remove("dragging");
};

const infiniteScroll = () => {
  // If the carouselbest is at the beginning, scroll to the end
  if (carouselbest.scrollLeft === 0) {
    carouselbest.classList.add("no-transition");
    carouselbest.scrollLeft =
      carouselbest.scrollWidth - 2 * carouselbest.offsetWidth;
    carouselbest.classList.remove("no-transition");
  }
  // If the carouselbest is at the end, scroll to the beginning
  else if (
    Math.ceil(carouselbest.scrollLeft) ===
    carouselbest.scrollWidth - carouselbest.offsetWidth
  ) {
    carouselbest.classList.add("no-transition");
    carouselbest.scrollLeft = carouselbest.offsetWidth;
    carouselbest.classList.remove("no-transition");
  }

  // Clear existing timeout & start autoplay if mouse is not hovering over carouselbest
  clearTimeout(timeoutId);
  if (!wrapperbest.matches(":hover")) autoPlay();
};

const autoPlay = () => {
  if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
  // Autoplay the carouselbest after every 2500 ms
  timeoutId = setTimeout(
    () => (carouselbest.scrollLeft += firstCardWidth),
    2500
  );
};
autoPlay();

carouselbest.addEventListener("mousedown", dragStart);
carouselbest.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carouselbest.addEventListener("scroll", infiniteScroll);
wrapperbest.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapperbest.addEventListener("mouseleave", autoPlay);
