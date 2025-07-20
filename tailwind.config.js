/** @type {import('tailwindcss').Config} */
export default {
    // Beri tahu Tailwind untuk memindai file-file ini
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
