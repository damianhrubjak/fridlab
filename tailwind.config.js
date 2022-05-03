const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
    ],
    theme: {
        extend: {
            fontFamily: {
                mono: ['"IBM Plex Mono"', ...defaultTheme.fontFamily.mono],
                heading: ["'Press Start 2P'", ...defaultTheme.fontFamily.mono],
            },
            colors: {
                body: "var(--color-body)",
                blue: "var(--color-blue)",
                "dark-blue": "var(--color-dark-blue)",
                yellow: "var(--color-yellow)",
                green: "var(--color-green)",
            },
        },
        screens: {
            xs: "475px",
            ...defaultTheme.screens,
        },
    },
    plugins: [],
};
