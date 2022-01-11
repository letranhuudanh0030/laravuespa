module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            lineHeight: {
                "hd-loose": "40px",
            },
            colors: {
                "hd-black": "#222222",
                "hd-grey-darkest": "#4a4a4a",
            },
        },
    },
    plugins: [],
};
