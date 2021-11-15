module.exports = {
  purge: [
    './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'bright-yellow': '#fcb958',
        'dark-yellow': '#ffb238',
        'princeton-orange': '#ed7e24',
        'rufous': '#9c270c',
        'rosewood': '#510d0a',
        'vermilion': '#d84727',
      },
      fontFamily: {
        roomettes: ['Fresh Roomettes personal use', 'sans-serif'],
        cabin: ['Cabin', 'sans-serif'],
        flattery: ['flattery', 'sans-serif']
      },
      backgroundImage: {
        'home-cover': "url(/img/candle-home-cover.png)" 
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
