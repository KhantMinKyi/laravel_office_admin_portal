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
            blue: {
                600: "#426B66",
                700: "#3B5D5A",
                800: "#223735",
                900: "#152221",
            },
            mainbody: {
                100: "#94EAE0",
                200: "#80CBC2",
                300: "#6BABA3",
                400: "#609B94",
                500: "#538680",
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
