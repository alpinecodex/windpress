/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        main: {
          50: '#eff6ff',
          100: '#dbeafe',
          200: '#bfdbfe',
          300: '#93c5fd',
          400: '#38bdf8',
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
          800: '#1e40af',
          900: '#1e3a8a',
          950: '#172554',
        }
      },
      // add custom font here
      fontFamily: {
        'custom': ['Manrope', 'ui-serif', 'sans-serif']
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
};
