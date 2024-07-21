/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['./*.{html,js,php}'],
    theme: {
        extend: {
            colors: {
                primary: 'hsl(var(--primary))',
                secondary: 'hsl(var(--secondary))',
                third: 'hsl(var(--third))',
                background: 'hsl(var(--background))',
                border: 'hsl(var(--border))',
                pred: 'hsl(var(--pred))',
                'light-gray': 'hsl(var(--light-gray))',
                'dark-blue': 'hsl(var(--dark-blue))',
            },
        },
    },
    daisyui: {
        themes: ['light'],
    },
    plugins: [require('daisyui')],
};
