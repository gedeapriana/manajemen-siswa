/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
		"./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
		"./node_modules/flowbite/**/*.js",
	],
	darkMode: 'class',
  theme: {
    extend: {
			aspectRatio: {
				'3/4':'3/4',
			}
		},
  },
  plugins: [
		require('flowbite/plugin'),
	],
}
