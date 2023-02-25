const hamburger = document.querySelector('#__navbar-hamburger');
const floatingNavbar = document.querySelector('#__floating-navbar');

hamburger.addEventListener('click', function() {
	hamburger.classList.toggle("bi-list");
	hamburger.classList.toggle("bi-x");

	if(hamburger.classList.contains("hidden")) {
		floatingNavbar.classList.add('hidden');
	}

	if(hamburger.classList.contains("bi-x")) {
		floatingNavbar.style.transform = "translateX(0)";
	} else {
		floatingNavbar.style.transform = "translateX(300px)"
	}
});

window.addEventListener('click', function(e) {
	if(e.target != hamburger && e.target != floatingNavbar) {
		hamburger.classList.remove('bi-x');
		hamburger.classList.add('bi-list');
		floatingNavbar.style.transform = 'translateX(300px)'
	}
});
