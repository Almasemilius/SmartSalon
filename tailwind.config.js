module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
   
    extend: {
      colors: {
        pink: '#FED5DB',
        brownish: '#FCEEE5',
        deepPink: '#FAA2AE'
      },

      fontFamily: {
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
  variants: {
    extend: {},
  },
  plugins: [],
}
