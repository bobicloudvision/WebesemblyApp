/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    safelist: [
        'btn-primary',
        'btn-secondary',
        'btn-header-primary',
        'btn-header-secondary',
    ],
    theme: {
        extend: {},
    },
    variants: {},
    plugins: [],
}
