/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
      "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
        colors: {
            'background': '#162836',
            'primary': '#CF7650',
            'secondary': '#D5A187',
        },
        fontFamily: {
            'sans': ['"Luckiest Guy"', ...defaultTheme.fontFamily.sans]
        }
    },
  },
  plugins: [],
}

