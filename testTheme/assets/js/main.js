/**
 * *Burger
 */
const burgerBtn = document.querySelector(".menu");
const burgerContent = document.querySelector(".burger");

burgerBtn.addEventListener("click", () => {
  burgerContent.classList.toggle("active");
  burgerBtn.classList.toggle("opened");
});

const closeBurgers = document.querySelectorAll(".closeBurger");
closeBurgers.forEach((elem) => {
  elem.addEventListener("click", () => {
    burgerContent.classList.remove("active");
    burgerBtn.classList.remove("opened");
  });
});

/**
 * *Test slider
 */
var swiper = new Swiper(".customersSlider", {
  pagination: {
    el: ".customers-pagination",
  },
});

/**
 * *Sticy header
 */
var header = document.querySelector("header");
var navbarHeight = header.offsetHeight;
var lastScrollTop = 0;

window.onscroll = function () {
  scrollHide();
};

function scrollHide() {
  var st = window.pageYOffset || document.documentElement.scrollTop;
  if (st < lastScrollTop) {
    gsap.to(header, { top: 0, duration: 0.5 });
  } else {
    gsap.to(header, { top: -navbarHeight, duration: 0.5 });
  }

  lastScrollTop = st <= 0 ? 0 : st;
}

/**
 * Animation
 */
gsap.from(".hero__title", {
  y: 70,
  opacity: 0,
  duration: 1.5,
});
gsap.from(".header", {
  y: -100,

  delay: 0.7,
  duration: 1.2,
});

document.querySelectorAll(".company__number span").forEach(function (element) {
  var num = parseFloat(element.getAttribute("data-number"));
  var split = (num + "").split(".");
  var decimals = split.length > 1 ? split[1].length : 0;

  ScrollTrigger.create({
    trigger: element,
    start: "top bottom", // когда элемент только начинает быть видимым
    end: "bottom top", // когда элемент выходит за пределы экрана
    toggleActions: "restart none none none", // заново запускаем анимацию при каждом вхождении
    onEnter: () => {
      var zero = { val: 0 };
      gsap.to(zero, {
        val: num,
        duration: 1.5,
        ease: "power4.out",
        onUpdate: function () {
          element.textContent = zero.val.toFixed(decimals);
        },
      });
    },
  });
});

gsap.utils.toArray(".title").forEach((title, index) => {
  gsap.from(title, {
    opacity: 0,
    duration: 2,
    y: 70,
    scrollTrigger: {
      trigger: title,
      start: "top 80%",
      end: "top 40%",
      scrub: true,
      onUpdate: (self) => {
        const progress = self.progress;
        title.style.opacity = progress;
      },
    },
  });
});

gsap.from(".projects__wrap img", {
  y: 300,
  opacity: 0,
  scrollTrigger: {
    trigger: ".projects__wrap img",
    start: "top 80%",
    end: "top 40%",
    scrub: true,
  },
});

/**
 * Filter
 */
document.addEventListener("DOMContentLoaded", () => {
  const filterItems = document.querySelectorAll(".page__filter li");
  const posts = document.querySelectorAll(".page__item");

  filterItems.forEach((filterItem) => {
    filterItem.addEventListener("click", () => {
      const category = filterItem.getAttribute("data-category");

      // Убираем активный класс у всех фильтров
      filterItems.forEach((item) => item.classList.remove("active"));
      // Добавляем активный класс выбранному фильтру
      filterItem.classList.add("active");

      // Показываем или скрываем посты в зависимости от выбранной категории
      posts.forEach((post) => {
        if (category === "all" || post.classList.contains(category)) {
          post.style.display = "block";
        } else {
          post.style.display = "none";
        }
      });
    });
  });
});
