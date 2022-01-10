module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            lineHeight: {
                loose: "40px",
            },
            colors: {
                black: "#222222",
                "grey-darkest": "#4a4a4a",
            },
        },
    },
    plugins: [],
};
