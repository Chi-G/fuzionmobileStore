import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                'public/frontend/assets/css/bootstrap.min.css',
                'public/frontend/assets/css/animate.css',
                'public/frontend/assets/css/font-awesome.min.css',
                'public/frontend/assets/css/magnific-popup.css',
                'public/frontend/assets/css/nice-select.css',
                'public/frontend/assets/css/slick.css',
                'public/frontend/assets/css/default.css',
                'public/frontend/assets/css/style.css',
                'public/frontend/assets/css/responsive.css',
            ],
            refresh: true,
        }),
    ],
});
