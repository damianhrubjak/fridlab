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
                secondary: [
                    "'Press Start 2P'",
                    ...defaultTheme.fontFamily.mono,
                ],
            },
        },
        screens: {
            xs: "475px",
            ...defaultTheme.screens,
        },
    },
    plugins: [],
};
