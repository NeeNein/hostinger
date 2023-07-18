const wrapper2 = document.querySelector(".wrapper2");
const carouselcard2 = document.querySelector(".carouselcard2");
const firstCardWidth = carouselcard2.querySelector(".card2").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper2 i");
const carouselChildrens = [...carouselcard2.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carouselcard2 at once
let cardPerView = Math.round(carouselcard2.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carouselcard2 for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card2 => {
    carouselcard2.insertAdjacentHTML("afterbegin", card2.outerHTML);
});

// Insert copies of the first few cards to end of carouselcard2 for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card2 => {
    carouselcard2.insertAdjacentHTML("beforeend", card2.outerHTML);
});

// Scroll the carouselcard2 at appropriate postition to hide first few duplicate cards on Firefox
carouselcard2.classList.add("no-transition");
carouselcard2.scrollLeft = carouselcard2.offsetWidth;
carouselcard2.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carouselcard2 left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carouselcard2.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carouselcard2.classList.add("dragging");
    // Records the initial cursor and scroll position of the carouselcard2
    startX = e.pageX;
    startScrollLeft = carouselcard2.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carouselcard2 based on the cursor movement
    carouselcard2.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carouselcard2.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carouselcard2 is at the beginning, scroll to the end
    if(carouselcard2.scrollLeft === 0) {
        carouselcard2.classList.add("no-transition");
        carouselcard2.scrollLeft = carouselcard2.scrollWidth - (2 * carouselcard2.offsetWidth);
        carouselcard2.classList.remove("no-transition");
    }
    // If the carouselcard2 is at the end, scroll to the beginning
    else if(Math.ceil(carouselcard2.scrollLeft) === carouselcard2.scrollWidth - carouselcard2.offsetWidth) {
        carouselcard2.classList.add("no-transition");
        carouselcard2.scrollLeft = carouselcard2.offsetWidth;
        carouselcard2.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carouselcard2
    clearTimeout(timeoutId);
    if(!wrapper2.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carouselcard2 after every 2500 ms
    timeoutId = setTimeout(() => carouselcard2.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carouselcard2.addEventListener("mousedown", dragStart);
carouselcard2.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carouselcard2.addEventListener("scroll", infiniteScroll);
wrapper2.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper2.addEventListener("mouseleave", autoPlay);