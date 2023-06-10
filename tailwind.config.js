/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors : {
        'main-color': '#14141F',
        'footer-color' : '#0D0D11',
        'like-color' : '#14141F',
        'blue-primary' : '#5142FC',
        'secundary-grey' : '#343444',
        'secundary-white' : '#EBEBEB',
        'white-2' : '#8A8AA0',
        'white-3' : '#7A798A',
        'Warning' : '#FFBD0C',
        'black6' : 'background: rgba(0, 0, 0, 0.6)',
      },
      
      width : {
        'main-width' : '1920px',
      },
      
      fontSize : {
        '14px' : '14px',
        '15px' : '15px',
        '18px' : '18px',
        '36px' : '36px',
        '48px' : '48px',
      },

      fontFamily : {
        'urbanist' : ['Urbanist', 'sans-serif']
      },

      gridTemplateColumns : {
        'sixCols' : 'repeat(6, 60px)'
      },

      gridTemplateRows : {
        'twoRows' : 'repeat(2, 131px)'
      },

      borderRadius : {
        'ten' : '10px',
        'Twenty' : '20px',
        'thirty' : '30px',
        'thirtyFour' : '34px',
      }

    },
  },
  plugins: [],
}