import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./src/**/*.{html,js}",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                PlayfairDisplay: ["Playfair Display", "serif"],
                PlusJakartaSans: ["Plus Jakarta Sans", "serif"],
            },
            colors: {
                almond: "#EEE1D1",
                flame: "#E8512A",
                junggleGreen: "#163A35",
                metalicSilver: "#9DB1AE",
                slateGreen: "#2A635C",
                gainsBoro: "#DADADA",
                metalSaurus: "#627F7B",
                warning: "#FDDA7E",
                success: "#00A86B",
                error: "#FF6F61",
            },
        },
    },

    plugins: [forms, typography],
};
