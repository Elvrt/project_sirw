export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./Components/**/*.{js,ts,jsx,tsx}",
    ],
    theme: {
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        'text-align': 'justify',
                    },
                },
            },
        },
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
            'linear1' : '#F0ECE9',
            'linear2' : '#FEF4E9',
            'backgroundform' : '#DFDFDF',
            'kuning-gelap' : '#C8A116',
            'merah-gelap' : '#BA1717',
            'abu-gelap' : '#615B5B',
            'hijau-gelap' : '#1D8104',
            'gray-900' : '#111827',
            'gray-600' : '#4b5563',
            'gray-500' : '#6B7280',
            'gray-50' : '#F9FAFB',
            'red-700' : '#B91C1C',
            'red-600' : '#DC2626',
            'red-500' : '#EF4444',
            'abu-army': '#EEEDEB',
            'hitam': '#000000'
        },
        fontFamily: {

        },
        fontSize: {
            'header' : '3rem',
            'sub' : '1.875rem',
            'text' : '1.25rem'
        },
        fontWeight: {
            bold: 700,
            medium: 500,
            normal: 400
        }
    },
    plugins: [
        require('@tailwindcss/typography'),
        'prettier-plugin-tailwindcss'
    ],
}
