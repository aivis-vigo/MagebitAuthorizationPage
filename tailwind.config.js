const {blue, emerald, amber, violet, orange, red, gray} = require("tailwindcss/colors");
const { spacing } = require('tailwindcss/defaultTheme');
module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false,
    theme: {
        extend: {
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
            },
            fontFamily: {
                sans: ["Segoe UI", "Helvetica Neue", "Arial", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"]
            },
            colors: {
                primary: {
                    lighter: blue['300'],
                    DEFAULT: blue['800'],
                    darker: blue['900'],
                },
                secondary: {
                    lighter: blue['100'],
                    DEFAULT: blue['200'],
                    darker: blue['300'],
                },
                background: {
                    lighter: blue['100'],
                    DEFAULT: blue['200'],
                    darker: blue['300'],
                },
                green: {
                    ...(emerald),
                    base: 'rgba(2, 23, 14, 1)',
                    hover:'rgba(15, 131, 82, 1)',
                    active:'rgba(10, 87, 55, 1)'
                },
                yellow: amber,
                purple: violet,
            },
            textColor: {
                orange: orange,
                red: {
                    ...red,
                    DEFAULT: red['500'],
                },
                primary: {
                    lighter: gray['700'],
                    DEFAULT: gray['800'],
                    darker: gray['900'],
                },
                secondary: {
                    lighter: gray['400'],
                    DEFAULT: 'rgba(109, 109, 109, 1)',
                    darker: gray['800'],
                    hover: 'rgba(15, 131, 82, 1)',
                    active: 'rgba(10, 87, 55, 1)',
                },
                checkbox: {
                    DEFAULT: 'rgba(15, 131, 82, 1)'
                }
            },
            backgroundColor: {
                primary: {
                    lighter: blue['600'],
                    DEFAULT: blue['700'],
                    darker: blue['800'],
                },
                secondary: {
                    lighter: blue['100'],
                    DEFAULT: blue['200'],
                    darker: blue['300'],
                },
                container: {
                    lighter: '#ffffff',
                    DEFAULT: '#fafafa',
                    darker: '#f5f5f5',
                },
                checkbox: {
                    base: 'rgba(15, 131, 82, 1)',
                }
            },
            borderColor: {
                primary: {
                    lighter: blue['600'],
                    DEFAULT: blue['700'],
                    darker: blue['800'],
                },
                secondary: {
                    lighter: blue['100'],
                    DEFAULT: blue['200'],
                    darker: blue['300'],
                },
                container: {
                    lighter: '#f5f5f5',
                    DEFAULT: '#e7e7e7',
                    darker: '#b6b6b6',
                },
                checkbox: {
                    hover: 'rgb(15, 131, 82)'
                }
            },
            minWidth: {
                8: spacing["8"],
                20: spacing["20"],
                40: spacing["40"],
                48: spacing["48"],
            },
            minHeight: {
                14: spacing["14"],
                'screen-25': '25vh',
                'screen-50': '50vh',
                'screen-75': '75vh',
            },
            maxHeight: {
                '0': '0',
                'screen-25': '25vh',
                'screen-50': '50vh',
                'screen-75': '75vh',
            },
            container: {
                center: true,
                padding: '1.5rem',
            },
            dropShadow: {
                custom: 'rgba(0, 0, 0, 0.25) 0px 1px 8px',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
