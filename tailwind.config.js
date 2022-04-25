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
      borderWidth: {
        '3': '3px',
      },
      fontFamily: {
        sans: ["Proxima Nova", "sans-serif"],
        title: ["Bebas Neue", "sans-serif"]
      },
      minWidth: {
        '1/2': '50%',
        '1/3': '33.3334%',
      },
      minHeight: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        'full': '100%',
      },
      spacing: {
        '1/2': '50%',
        '1/3': '33.3334%',
        '1/4': '25%',
        '1/6': '16.6667%',
        '1/8': '12.5%',
        '1/12': '8.3333%',
      },
      transitionDuration: {
        '0': '0ms',
      },
      transitionDelay: {
        '0': '0ms',
      },
      transitionProperty: {
        'height': 'height',
        'transform-height': 'transform, height',
      },
    },
  },
  plugins: [
    
  ],
};
