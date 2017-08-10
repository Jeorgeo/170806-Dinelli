
console.log('test');

var toggle_btn = document.getElementById('js-toggle');
var menu_nav = document.getElementById('masthead');
var toggle_arrow = document.querySelector('.header-menu-toggle');

toggle_btn.addEventListener('click', moveMenu);

function moveMenu(){
  console.log(toggle_btn);
  if(menu_nav.classList.contains('nav-show')) {
      toggle_arrow.classList.remove('btn-arrow-top');
      toggle_arrow.classList.remove('btn-arrow-bottom');
      menu_nav.classList.remove('nav-show');
     } else {
      toggle_arrow.classList.add('btn-arrow-top');
      toggle_arrow.classList.add('btn-arrow-bottom');
      menu_nav.classList.add('nav-show');
      }
};
