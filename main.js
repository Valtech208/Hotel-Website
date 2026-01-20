  const images = document.querySelectorAll(".hero-img");
  const dots = document.querySelectorAll(".dot");
  let currentIndex = 0;

  function showSlide(index) {
    images.forEach(img => img.classList.remove("active"));
    dots.forEach(dot => dot.classList.remove("active"));

    images[index].classList.add("active");
    dots[index].classList.add("active");

    currentIndex = index;
  }

  setInterval(() => {
    let next = (currentIndex + 1) % images.length;
    showSlide(next);
  }, 4000);

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      showSlide(index);
    });
  });
