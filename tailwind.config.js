const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: [
    './resources/**/**/*.php',
    './resources/**/*.php',
    './resources/**/**/*.js',
    './resources/**/*.js',
    ],
    options: {
      whitelist: ['italic', 'text-c-blue-300', 'md:hidden'],
    }
  },
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      transparent: colors.transparent,
      current: colors.current,
    },
    extend: {
      colors: {
        'c-red' : {
          100: '#E1261D',
          200: '#802628', 
        },
        'c-blue': {
          100: '#00263D',
          200: '#04202E',
        },
        'c-gray':  {
          100: '#eeeeee',
          200: '#f3f3f3',
          300: '#cccccc',
          400: '#cdcdcd',
          500: '#b3b3b3',
          600: '#a1a1a1',
          700: '#949494',
          800: '#565656',
          900: '#757575',
          1000: '#858585',
        },
        'c-black' : {
          100: '#282828',
        }
      },
      fontFamily: {
        'bebas' : [
          'Bebas Neue',
          'cursive'
        ],
        'mont' : [
          'Montserrat', 
          'sans-serif'
        ],
        'proxima' : [
          'proxima-nova',
          'sans-serif'
        ],
      },
      borderWidth: {
        '3': '3px'
      },
      inset: {
        '1/2' : '50%',
      },
      // fontSize: {
      //   '6.5xl': '5rem',
      //   '7xl': '6rem',
      //   '8xl': '7rem',
      //   '9xl': '10rem',
      // },
      // maxWidth: {
      //   '384': '384px',
      //   '426': '426.667px',
      //   '512': '512px',
      //   '533': '533.333px',
      //   '2/3': '682.67px',
      //   '720': '720px',
      // },
      spacing: {
        '2px': '2px',
        '3px': '3px',
        '18': '4.5rem',
        '44' : '11rem',
        '80' : '22rem',
        '84': '26rem',
        '100': '28rem',
        '104': '30rem',
        '108' : '32rem',
        '112' : '36rem',
        '116' : '38rem',
        '120' : '42rem',
      },
      opacity: {
        '31': '0.31',
        '90': '0.9',
      },
      screens: {
        '2xl' : '1536px',
        // '3xl' : '1625px'
      },
      boxShadow: {
      },
      transformOrigin: {
        '100' : '100% 0',
      }
    },
    typography: (theme) => ({
      default: {
        // css: {
        //   color: theme('colors.c-blue.200'),
        //   strong: {
        //     color: theme('colors.c-blue.200'),
        //   },
        //   'ul > li:before': {
        //     backgroundColor: theme('colors.c-orange.100'),
        //   },
        //   'h1, h2, h3, h4, h5' : {
        //     color: theme('colors.c-blue.200'),
        //   }
        // }
      }
    })
  },
  variants: {
    // scale: ['responsive', 'hover', 'focus', 'group-hover'],
    // display: ['responsive', 'hover', 'group-hover'],
    boxShadow: ({after}) => after(['group-hover']),
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/typography'),
  ],
  experimental: 'all',
}
