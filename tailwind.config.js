const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary:"#186CB5",
                primaryVariant:"#26469B",
                secondary:"#F80E29",
                surface: "#EBCC4A",
                dark:"#000100",
                success :"#007247",
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
