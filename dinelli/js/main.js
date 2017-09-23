var toggleBtn = document.getElementById('js-toggle');
var menuNav = document.getElementById('masthead');
var toggleArrow = document.querySelector('.header-menu-toggle');

toggleBtn.addEventListener('click', moveMenu);

function moveMenu(){
  if(menuNav.classList.contains('nav-show')) {
      toggleArrow.classList.remove('btn-arrow-top');
      toggleArrow.classList.remove('btn-arrow-bottom');
      menuNav.classList.remove('nav-show');
     } else {
      toggleArrow.classList.add('btn-arrow-top');
      toggleArrow.classList.add('btn-arrow-bottom');
      menuNav.classList.add('nav-show');
      }
};

// popup windows

var popup = document.querySelector(".popup-question");
var close = document.querySelector(".popup-question-close");
var winPopup = document.querySelector(".wrap");

function showPopup() {
  popup.classList.add("modal-content-show");
  winPopup.classList.add("modal-content-show");
};

function removePopup() {
  popup.classList.remove("modal-content-show");
  winPopup.classList.remove("modal-content-show");
};



close.addEventListener("click", function(event) {

  event.preventDefault();

  removePopup();

});



window.addEventListener("keydown", function(event) {

  if (event.keyCode === 27) {

    if (popup.classList.contains("modal-content-show")) {

      removePopup();

    }

  }

});



winPopup.addEventListener("click", function(event) {

  if (winPopup.classList.contains("modal-content-show")) {

    removePopup();

  }

});

$(document).ready(function() {

	//E-mail Ajax Send
	$(".modal-form").submit(function() { //Change
		var th = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th,
		}).done(function() {
			alert("Спасибо! Мы свяжемся с вами в ближайшее время!");
			removePopup();
		});
		return false;
	});

});
