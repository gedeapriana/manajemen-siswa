const html = document.querySelector('#__html');
const darkModeButton = document.querySelector('#__dark-mode-toggle');

darkModeButton.addEventListener('click', function() {
	html.classList.toggle("dark");
	darkModeButton.classList.toggle("bi-sun");
	darkModeButton.classList.toggle("bi-moon");

	if(html.classList.contains("dark")) {
		localStorage.theme = 'dark';
	} else {
		localStorage.theme = 'light';
	}
});
