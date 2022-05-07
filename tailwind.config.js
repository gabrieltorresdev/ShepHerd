module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("daisyui"),
    require('flowbite/plugin')
  ],
  daisyui: {
    themes: ["light", "dark", "corporate", "business", "emerald", "dracula"],
  },

}