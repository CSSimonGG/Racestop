import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Open Sans",
                    "sans-serif",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
            zIndex: {
                60: "60",
                70: "70",
                80: "80",
                90: "90",
                100: "100",
            },
        },
        colors: {
            yellow: "#FAD732",
            "dark-red": "#D00000",
            "light-red": "#ED1A1A",
            night: "#131315",
            jet: "#2F2F2F",
            white: "#FFFFFF",
            gray: "#EEEEEE",
        },
        screens: {
            xsm: "640px",
            // => @media (min-width: 640px) { ... }

            sm: "750px",
            // => @media (min-width: 700px) { ... }

            md: "910px",
            // => @media (min-width: 910px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1240px",
            // => @media (min-width: 1240px) { ... }

            "2xl": "1440px",
            // => @media (min-width: 1440px) { ... }

            "3xl": "1736px",
            // => @media (min-width: 1736px) { ... }

            "4xl": "2250px",
            // => @media (min-width: 2250px) { ... }

            "5xl": "3150px",
            // => @media (min-width: 3150px) { ... }

            "6xl": "3750px",
            // => @media (min-width: 3750px) { ... }

            "7xl": "5250px",
            // => @media (min-width: 5250px) { ... }
        },
        borderWidth: {
            DEFAULT: "1px",
            0: "0",
            2: "2px",
            3: "3px",
            4: "4px",
            6: "6px",
            8: "8px",
            20: "20px",
        },
    },

    plugins: [forms],
};
