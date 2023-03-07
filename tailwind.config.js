/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  daisyui: {
    themes: false,
  },
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}
