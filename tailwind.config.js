import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import aspectRatio from '@tailwindcss/aspect-ratio';
import colors from 'tailwindcss/colors';
import { Pagination } from 'swiper/modules';


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                indio: {
                  oscuro: '#1C3144',
                  gris: '#596F62',
                  verde: '#7EA16B',
                },
                cyan: colors.cyan,
              },
        },
    },

    plugins: [forms, typography, aspectRatio, colors],
};
