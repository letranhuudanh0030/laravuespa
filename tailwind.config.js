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
                "hd-grey-darker": "#606f7b",
                "hd-grey-darkest": "#4a4a4a",
                "hd-grey-light": "#DEDEDE",
                "hd-grey-lighter": "#f1f5f8",
                "hd-grey-lightest": "#f9f9f9",
                "hd-grey": "#b8c2cc",
                "hd-blue": "#1747b0",
            },
            boxShadow: {
                "hd-default": "0 1px 7px 0 rgba(36,37,38,0.08)",
            },
            width: {
                "hd-18": "4.5rem",
            },
            height: {
                "hd-18": "4.5rem",
            },
            fontSize: {
                "2xs": ".625rem",
            },
        },
    },
    plugins: [],
};
