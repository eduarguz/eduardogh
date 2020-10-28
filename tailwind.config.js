const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  purge: {
    content: [
      './source/**/*.js',
      './source/**/*.jsx',
      './source/**/*.ts',
      './source/**/*.tsx',
      './source/**/*.php',
      './source/**/*.vue',
      './source/**/*.twig',
    ],
  },
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
