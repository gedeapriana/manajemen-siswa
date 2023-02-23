/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
		"./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
	],
	darkMode: 'class',
  theme: {
    extend: {
			aspectRatio: {
				'3/4':'3/4',
			}
		},
  },
  plugins: [],
}
