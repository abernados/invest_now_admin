const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                display: ['Rockwell'],
                body: ["'Segoe UI'"]
            },
            colors: {
                cyan: colors.cyan,
                yellow: colors.yellow,
                purple: colors.purple,
                orange: colors.orange,
                red: colors.red,
                blue: colors.blue,
                primary: '#0D47A1'
            },
            spacing: {
                '108': '27rem'
            },
            primary: '#0D47A1',
            sidebarActive: '#FFF0A7',
            custom: {
                gradient_blue_dark: '#0A367B',
                gradient_blue_light: '#0D47A1',
                gradient_violet_dark: '#6C63FF',
                gradient_violet_medium: '#7B72FF',
                gradient_violet_light: '#837BFF'
            }
        }
    },

    variants: {
        extend: {
            opacity: ['disabled']
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]
};