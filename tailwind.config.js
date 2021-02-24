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
                blue: colors.blue,
                primary: '#0D47A1'
            }
        }
    },

    variants: {
        extend: {
            opacity: ['disabled']
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};