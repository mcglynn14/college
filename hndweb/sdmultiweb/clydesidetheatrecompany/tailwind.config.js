/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      spacing: {
        '97': '50rem',
        '337':'337px',
      },
      colors: {
        'ctc-gold': '#D9A362',
        'ctc-black': '#0D0D0D',
        'ctc-twilight': '#4F528C'
      },
      fontFamily: {
        'body': ['sans-serif'],
        'heading': ['Figtree']
      },
    }
  },
  plugins: [],
}

