// ============ STICKY NAVBAR ===============


// ============ SLIDE AUTO PLAY =============

const myslide = document.querySelectorAll('.myslide'),
	dot1 = document.querySelectorAll('.dot1');
let counter = 1;
slidefun(counter);

let timer = setInterval(autoSlide, 8000);
function autoSlide() {
	counter += 1;
	slidefun(counter);
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 8000);
}

function slidefun(n) {

	let i;
	for (i = 0; i < myslide.length; i++) {
		myslide[i].style.display = "none";
	}
	for (i = 0; i < dot1.length; i++) {
		dot1[i].className = dot1[i].className.replace(' active1', '');
	}
	if (n > myslide.length) {
		counter = 1;
	}
	if (n < 1) {
		counter = myslide.length;
	}
	myslide[counter - 1].style.display = "block";
	dot1[counter - 1].className += " active1";
}

//=============== SEARCH ==================

function openNav() {
	document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
	document.getElementById("myNav").style.height = "0%";
	document.getElementById("id_text").value = ' ';
}

// =============== SLIDE ==================

$(document).ready(function () {
	$("#autoWidth").lightSlider({
		autoWitdh: true,
		loop: true,
		onSliderLoad: function () {
			$('#autoWidth').removeClass('cs-hidden')
		}
	})
})

