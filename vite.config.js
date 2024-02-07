import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/views/**/*.blade.php',
                'resources/css/app.css',
                'resources/css/theme.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
