const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  purge: [],
  darkMode: false,
  theme: {
    extend: {
      fontFamily: {
        sans: ['Work Sans', ...defaultTheme.fontFamily.sans],
        serif: ['Rubik', ...defaultTheme.fontFamily.serif],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
