import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css'],
      refresh: true,
    }),
  ],
  build: {
    outDir: 'public/build', // Explicitly set output directory
    emptyOutDir: true,     // Clean the directory before build
    manifest: true,        // Generate manifest.json
    rollupOptions: {
      output: {
        assetFileNames: 'assets/[name].[hash][extname]',
      },
    },
  },
  publicDir: false, // Disable default public directory handling
});