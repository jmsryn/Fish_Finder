module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        'nunito': ['Nunito', 'sans-serif'],
        'trocchi': ['Trocchi', 'sans-serif'],
        'proza': ['Proza Libre', 'sans-serif'],
      }
    },
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}
