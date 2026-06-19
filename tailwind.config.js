module.exports = {
    prefix: 'tw-',
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        "tw-bg-blue-600",
        "tw-bg-green-600",
        "tw-bg-red-600",
        "tw-bg-yellow-500"
    ],
    theme: {
        extend: {
            colors: {
                text: "#52656d",  
                heading: "#074560",
                "heading-secondary": "#D20048",
                primary: "#ffffff",
                secondary: "#074560",
            },
            backgroundImage: {
                'primary-gradient':
                    'linear-gradient(180deg, #d20048 0%, #d20048b3 100%)',
            },
        },
    },

    plugins: [],
};