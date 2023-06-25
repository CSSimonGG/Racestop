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
        },
        colors: {
            yellow: "#FAD732",
            "dark-red": "#D00000",
            "light-red": "#ED1A1A",
            night: "#131315",
            jet: "#2F2F2F",
            white: "#FFFFFF",
        },
        screens: {
            xsm: "640px",
            // => @media (min-width: 640px) { ... }

            sm: "700px",
            // => @media (min-width: 700px) { ... }

            md: "870px",
            // => @media (min-width: 870px) { ... }

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
    },

    plugins: [forms],
};
