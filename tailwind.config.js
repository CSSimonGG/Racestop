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
            sm: "640px",
            // => @media (min-width: 640px) { ... }

            md: "870px",
            // => @media (min-width: 870px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1440px",
            // => @media (min-width: 1440px) { ... }

            "2xl": "1536px",
            // => @media (min-width: 1536px) { ... }
        },
    },

    plugins: [forms],
};
