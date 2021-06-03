const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            },

            colors : {
                transparent: 'transparent',
                black: colors.black,
                white: colors.white,
                gray: colors.coolGray,
                red: colors.red,
                yellow: colors.amber,
                blue: colors.blue,
                indigo: colors.indigo,
                purple: colors.violet,
                pink: colors.pink,
            },

        fontFamily: {
            'sans': ['Lato', 'sans-serif'],
            'serif': ['Niconne', 'cursive'],
            },
        extend: {
            colors : {
                green: {
                    50: '#f2faf9',
                    100: '#e6f4f3',
                    200: '#c0e5e1',
                    300: '#99d5cf',
                    400: '#4db5ab',
                    500: '#019587',
                    600: '#01867a',
                    700: '#017065',
                    800: '#015951',
                    900: '#1f272a'
                }

            },
            lineHeight: {
                'match-text-sm': '0.625rem',
                '12': '0.625rem',
               },
               height: {
                '0.5': '0.125rem',
                '3.5': '0.875rem',
                '7.5': '1.875rem',
                '12.5': '3.125rem',
              },
               width: {
                '0.5': '0.125rem',
                '7.5': '1.875rem',
                '12.5': '3.125rem',
              }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
