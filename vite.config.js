import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        // 'resources/js/app.js' // Uncomment if you have JS
      ],
      refresh: true,
    }),
  ],

  build: {
    outDir: 'public/build',
    emptyOutDir: true,
    manifest: 'manifest.json', // Explicit manifest name
    rollupOptions: {
      output: {
        assetFileNames: 'assets/[name].[hash][extname]',
        entryFileNames: 'assets/js/[name].[hash].js',
        chunkFileNames: 'assets/js/[name].[hash].js',
      },
    },
  },

  publicDir: true,
});