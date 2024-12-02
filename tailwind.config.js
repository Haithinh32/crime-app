import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            fontFamily: {},
        fontSize: {},
        fontWeight: {},
        lineHeight: {},
        letterSpacing: {},
        borderRadius: {},
        colors: {
          black: "#000000",
          text: "#d9d9d9",
          blue: "#1d9bf0",
          gray: "#6e767d",
          "border-color": "#2f3336",
          "trends-color": "#202327",
        },
        spacing: {},
        width: {},
        minWidth: {},
        maxWidth: {},
        height: {},
        minHeight: {},
        maxHeight: {},
        },
    },

    plugins: [forms],
};
