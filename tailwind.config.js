/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  screens: {
    sm: '640px',
    md: '768px',
    lg: '1024px',
    xl: '1280px',
    '2xl': '1536px',
  },
  theme: {
    extend: {
      screens:{
         xs:{
          min:'0px',
          max:'639px'
         }
      }
    },
  },
  plugins: [],
}
