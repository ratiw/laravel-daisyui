const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: require('daisyui/colors')
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('daisyui')
    ],

    daisyui: {
        themes: [
            {'mui': {
                "primary": "#4b6bfb",
                "primary-focus": "#1942fa",
                "primary-content": "#ffffff",
                "secondary": "#7b92b2",
                "secondary-focus": "#5c789d",
                "secondary-content": "#ffffff",
                "accent": "#67cba0",
                "accent-focus": "#41be88",
                "accent-content": "#ffffff",
                "neutral": "#181a2a",
                "neutral-focus": "#06060a",
                "neutral-content": "#edf2f7",
                "base-100": "#ffffff",
                "base-200": "#f7fafd",
                "base-300": "#edf2f7",
                "base-content": "#181a2a",
                "info": "#2094f3",
                "success": "#009485",
                "warning": "#ff9900",
                "error": "#ff5724",
                "--btn-focus-scale": "1",
                "--rounded-box": "0.4rem",
                "--rounded-btn": "0.4rem",
                "--rounded-badge": "1.9rem",
                "--tab-border": "2px"
            }}
        ]
    }
};
