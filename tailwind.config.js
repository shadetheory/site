import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                // Ash Is Still Paper — warm neutrals with memory of fire.
                paper: '#F5F0E8',
                smoke: '#D6CFC4',
                ash: '#8B8680',
                charcoal: '#2C2C2C',
                ember: {
                    DEFAULT: '#C4704B',
                    soft: '#D98B63',
                },
                burnt: {
                    DEFAULT: '#1A1613',
                    deep: '#120F0C',
                },
            },
            fontFamily: {
                display: ['"DM Serif Display"', 'Georgia', 'serif'],
                sans: ['Karla', 'Figtree', ...defaultTheme.fontFamily.sans],
                mono: ['"IBM Plex Mono"', ...defaultTheme.fontFamily.mono],
            },
            transitionDuration: {
                DEFAULT: '300ms',
            },
            transitionTimingFunction: {
                DEFAULT: 'cubic-bezier(0, 0, 0.2, 1)',
            },
        },
    },
    plugins: [],
};
