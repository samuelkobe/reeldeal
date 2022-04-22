module.exports = {
  content: ["./**/*.php", "./**/*.css",],
  theme: {
    extend: {
      colors: {
        brand: {
          main: '#51606A',
          alt: '#85B798',
          black: '#231F20',
        }
      },
      fontFamily: {
        sans: ["Proxima Nova", "sans-serif"],
        title: ["Bebas Neue", "sans-serif"]
      },
      minHeight: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        'full': '100%',
      },
      transitionDuration: {
        '0': '0ms',
      },
    },
  },
  plugins: [
    
  ],
};
