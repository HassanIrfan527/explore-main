import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";
import forms from '@tailwindcss/forms';
import containerQueries from '@tailwindcss/container-queries';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(), forms(), containerQueries(),
    ],
    server: {
        cors: true,
    },
});
