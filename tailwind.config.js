const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

               
        extend: {

            colors: {
                staghorn: {
                  50: '#fdf8f6',
                  100: '#e9eef1',
                  200: '#eaddd7',
                  300: '#e0cec7',
                  400: '#618AA2',
                  500: '#245775',
                  600: '#a18072',
                  700: '#977669',
                  800: '#846358',
                  900: '#43302b',
                },
              },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
