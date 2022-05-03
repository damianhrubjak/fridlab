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
                body: "#080212",
                "fri-yellow": "#feb81c",
                "prusa-orange": "#f94d0c",
                "purple-dark": "#560090",
            },
        },
        screens: {
            xs: "475px",
            ...defaultTheme.screens,
        },
    },
    plugins: [],
};
