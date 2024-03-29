/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors:{
      'army' : '#747264',
      'cream' : '#E0CCBE',
      'army-kuning' : '#D4D6A1',
      'abu-abu' : '#D9D9D9',
      'abu-putih' : '#EEEDEB', 
      'army-gelap' : '#4F5045',
      'army-muda' : '#AFB39D',
      'cream-muda' : '#F2E6D9',
      'abu-putih-muda' : '#F2F1F0',
      'hijau' : '#2AB906',
      'kuning' : '#FFD12E',
      'merah' : '#FF2E2E',
      'abu-tua' : '#8D8D8D',
      'biru-muda' : '#2FA2F6',
      'coklat' : '#8D7250',
      'coklat-muda' : '#AD8C63',
      'login' : '#FCFBF9',
      'login2' : '#F1EAE2',
      'hijau2' :'#A6AA93',
      'putih' : '#FFFFFF',

    } 
  },
  plugins: ['prettier-plugin-tailwindcss'],
}

