/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      dropShadow: {
        'custom': '0 0 5px rgba(0, 0, 0, 0.3)',
        'custom1': [
            '0 35px 35px rgba(0, 0, 0, 0.25)',
            '0 45px 65px rgba(0, 0, 0, 0.15)'
          ]
      },
      
      colors:{
        blue: '#1d75de',
        dark: '#000000',
        light: '#ffffff',
        green: '#1DB954',
        sgreen: '#056952',
        lgreen: '#c5f0c9',
        gray: '#6a6a6a',
        lgray: '#dedede',
        orange: '#f59b23',
        purple: '#af2896',
        lpurple: '#b49bc8',
        oblue: '#509bf5',
        pinkish: '#f573a0',
        neonred: '#ff4632',
        itsgreen: '#00a575',
        suplight: 'rgba(0,0,0,0)',
        darkgray: '#222326',
      },

      backgroundImage: {
        'vector-pattern': "url('./img/tmBanner.webp')",
        'vectorlg-pattern': "url('./img/Banner desktop.png')",
        'cards-texture': "url('./img/cardsbg.png')",
      },
    },
  },
  plugins: [],
}

