const root = document.documentElement;
 
document.addEventListener('mousemove', evt => {
    let x = evt.clientX / innerWidth;
    let y = evt.clientY / innerHeight;
 
    root.style.setProperty('--mouse-x', x * innerWidth - 110);
    root.style.setProperty('--mouse-y', y);

});

(function () {
  var menu = document.querySelector('header')
  var menuY = menu.offsetTop
  var prevStick
  function onScroll () {
    var y = window.scrollY || window.pageYOffset
    var stick = y > menuY
    if (prevStick !== stick) {
      menu.classList.toggle('sticky', stick)
      prevStick = stick
    }
  }
  window.addEventListener('scroll', function () {
    window.requestAnimationFrame(onScroll)

  })
}())

function scrollToTargetAdjusted(e){
    var element = document.getElementById(e);
    var headerOffset = 45;
    var elementPosition = element.getBoundingClientRect().top;
    var offsetPosition = elementPosition - headerOffset;

    window.scrollTo({
         top: offsetPosition,
         behavior: "smooth"
    });
}