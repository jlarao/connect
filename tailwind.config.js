/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['./*.php', './includes/**/*.php'],
    theme: {
        extend: {
            colors: {
                primary: '#00AEEF',
                secondary: '#0f172a',
                accent: '#38bdf8',
                info: '#34d399',
                bglight: '#f8fafc',
            },
            fontFamily: {
                sans: ['Outfit', 'sans-serif'],
            }
        }
    },
    plugins: [],
}
