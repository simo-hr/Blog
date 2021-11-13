module.exports = {
  purge: [
    './components/**/*.{vue,js}',
    './layouts/**/*.vue',
    './pages/**/*.vue',
    './plugins/**/*.{js,ts}',
    './nuxt.config.{js,ts}',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      top: {
        '1/2': '50%',
      },
    },
  },
  variants: {
    padding: ['responsive', 'hover', 'focus'],
    cursor: ['hover'],
    scale: ['hover'],
    extend: {},
  },
  plugins: [],
}
