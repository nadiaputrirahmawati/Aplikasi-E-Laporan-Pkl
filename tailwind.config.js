import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class", // Pakai "class" agar bisa toggle manual
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                pkl: { 
                    "primary": "#fd5530",  // warna sidebar (orange)
                    "secondary": "#f97316", // warna gradasi
                    "accent": "#37cdbe",
                    "neutral": "#3d4451",
                    "base-100": "#ffff",
                    "color": "#0000",
                    "base-content": "#f8fafc"
                },
                pkl_dark: {
                    "primary": "#394552",
                    "secondary": "#323c47",
                    "accent": "#37cdbe",
                    "neutral": "#FCFCFC",
                    "base-100": "#272f38",
                    "color": "#ffff",
                    "base-content": "#748496"
                  },
            },
            // "dark", // Pakai tema dark bawaan DaisyUI
        ],
    },
};
