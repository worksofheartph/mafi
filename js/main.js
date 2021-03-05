(function () {
  var select = document.querySelector(".toggle-select");
  var toggles = document.querySelectorAll(".toggle");

  function toggle(el) {
    for (var i = 0; i < toggles.length; i++) {
      toggles[i].classList.toggle("toggled", toggles[i].id === el.value);
    }
    var label = document.querySelector(".toggle-label");
    if (label) {
      label.textContent = el.value;
    }
  }

  if (select) {
    select.addEventListener("change", function (e) {
      toggle(e.target);
    });
  }
})();

(function() {
  var select = document.querySelector(".nav-select");
  if (select) {
    select.addEventListener("change", function (e) {
      if (e.target.value) {
        location.href = e.target.value;
      }
    })
  }
})();

(function () {
  const root = document.documentElement;

  document.addEventListener("mousemove", (evt) => {
    let x = evt.clientX / innerWidth;
    let y = evt.clientY / innerHeight;

    root.style.setProperty("--mouse-x", x * innerWidth - 110);
    root.style.setProperty("--mouse-y", y);
  });
})();

(function () {
  var menu = document.querySelector("header");
  var menuY = menu.offsetTop;
  var prevStick;
  function onScroll() {
    var y = window.scrollY || window.pageYOffset;
    var stick = y > menuY;
    if (prevStick !== stick) {
      menu.classList.toggle("sticky", stick);
      prevStick = stick;
    }
  }
  window.addEventListener("scroll", function () {
    window.requestAnimationFrame(onScroll);
  });
})();

(function () {
  var sliders = document.querySelectorAll(".slider");
  sliders.forEach(function (el) {
    new eg.Flicking(el, {
      gap: parseInt(el.dataset.gap, 10),
      anchor: el.dataset.anchor,
      hanger: el.dataset.hanger,
      autoResize: true,
      overflow: true,
      circular: true,
      duration: 250,
    });
  });
})();

(function () {
  var staggered = document.querySelector("[data-stagger]");
  Array.from(staggered.children).forEach(function (el, i) {
    el.style.setProperty("--delay", staggered.dataset.delay);
    el.style.setProperty("--index", i);
  });
})();

function scrollToTargetAdjusted(e) {
  var element = document.getElementById(e);
  var headerOffset = document.getElementById("header").offsetHeight;
  var elementPosition = element.offsetTop;
  var offsetPosition = elementPosition - headerOffset;

  console.log(element.offsetTop);

  window.scrollTo({
    top: offsetPosition,
    behavior: "smooth",
  });
}
