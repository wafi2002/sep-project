import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/components/primary-button.blade.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'white': '#ffffff',
                'purple': '#3f3cbb',
                'midnight': '#121063',
                'metal': '#565584',
                'tahiti': '#3ab7bf',
                'silver': '#ecebff',
                'bubble-gum': '#ff77e9',
                'bermuda': '#78dcca',
                'button-register':"#FAF116"

            },
            borderRadius: {
                'none': '0',
                'sm': '0.125rem',
                DEFAULT: '0.25rem',
                DEFAULT: '4px',
                'md': '0.375rem',
                'lg': '0.5rem',
                'full': '9999px',
                'large': '12px',
              }

        },
    },

    plugins: [forms],
};
