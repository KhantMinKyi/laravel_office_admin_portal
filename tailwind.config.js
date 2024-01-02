/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            mainbody: {
                100: "#cffafe",
                200: "#a5f3fc",
                300: "#6BABA3",
                400: "#22d3ee",
                500: "#06b6d4",
                600: "#426B66",
                700: "#3B5D5A",
                800: "#223735",
                900: "#152221",
            },
        },
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
