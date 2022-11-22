/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'theme-1': '#3F4CD9',
        'theme-2': '#6E61CA',
        'theme-3': '#C282FA',
        'theme-4': '#ECEDEF'
      },
    },
  },
  plugins: [],
}
