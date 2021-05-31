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
            xl: '1280px',
            '2xl': '1536px',
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
                    900: '#004942'
                }

            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
