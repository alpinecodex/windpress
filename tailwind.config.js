/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        'main': '#93c5fd',
        'secondary': '#2563eb',
        'text': '#222',
        'text-accent': '#1e3a8a',
      },

      // add custom font here
      fontFamily: {
        'custom': ['Manrope', 'sans-serif']
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
};
