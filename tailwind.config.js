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
                    "neutral": "#3d4451", // warna text (dark/hitam) 
                    "base-100": "#f1f5f9", // warna putih
                    "base-200": "#fd5530", // warna orange
                    "base-300": "#ffff", // warna putih
                    "base-content": "#ffff" // warna putih
                },
                pkl_dark: {
                    "primary": "#111d2d", // warna biru dark
                    "secondary": "#132133", // warna biru dark gradasi
                    "neutral": "#FCFCFC", // warna text (putih)
                    "base-100": "#17293f", //warna biru agak muda (content)
                    "base-200": "#2f3f4c", // warna abu abu tua
                    "base-300": "#2f3f4c", // warna abu abu tua
                    "base-content": "#111d2d" // warna biru dark biru
                  },
            },
        ],
    },
};
