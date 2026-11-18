import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                luvia: {
                    50: '#eef6ff',
                    100: '#d9eaff',
                    200: '#bcdcff',
                    300: '#8ec5ff',
                    400: '#59a4ff',
                    500: '#2f82ff',
                    600: '#0A6DFF',
                    700: '#0754d2',
                    800: '#0b47a6',
                    900: '#103e82',
                    950: '#0b2750',
                },
            },
            fontFamily: {
                sans: ['Inter', 'ui-sans-serif', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                soft: '0 20px 55px -30px rgba(15, 23, 42, 0.3)',
                blue: '0 22px 60px -30px rgba(10, 109, 255, 0.55)',
            },
        },
    },

    plugins: [forms],
};
