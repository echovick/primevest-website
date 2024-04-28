/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            primary: "#013A3A",
            secondary: "#E5846A",
            lightGreen: "#008080",
            darkGreen: "#001A1A",
            greenishGray: "#748686",
            footerDark: "#292929",
            lightCyan: "#EBF5F5",
            greenishCyan: "#004646",
            dimGray: "#444444",
            black: colors.black,
            white: colors.white,
            gray: colors.slate,
            green: colors.emerald,
            purple: colors.violet,
            yellow: colors.amber,
            pink: colors.fuchsia,
        },
        extend: {},
    },
    plugins: [],
};
