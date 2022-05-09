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
                sans: ["Ubuntu", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pallette: {
                    black: "var(--pallette-black)",
                    blue: "var(--pallette-blue)",
                    "dark-blue": "var(--pallette-dark-blue)",
                    yellow: "var(--pallette-yellow)",
                    green: "var(--pallette-green)",
                },
            },
        },
        screens: {
            xs: "475px",
            ...defaultTheme.screens,
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
