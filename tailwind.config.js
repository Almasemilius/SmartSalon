const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                pinkish: '#FED5DB',
                brownish: '#FCEEE5',
                deepPink: '#FAA2AE'
              },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                dancing : ["Dancing Script,cursive"],
            },
        },
        container: {
            center: 'true',
            padding: "1rem",
            screens: {
              lg: "1124px",
              xl: "1124px",
              "2xl" : "1124px",
      
            }
          },
        
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
