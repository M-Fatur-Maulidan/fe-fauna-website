import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    // TAMBAHKAN BLOK INI
    optimizeDeps: {
        include: ["axios", "lodash"], // Masukkan nama paket yang Anda gunakan
    },
});
