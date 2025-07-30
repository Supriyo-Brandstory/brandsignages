import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
      ],
      refresh: true,
    }),
  ],
    assetsInclude: [],
  build: {
    outDir: 'public/build',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      // Silence warnings about static assets
      onwarn(warning, warn) {
        if (warning.code === 'UNRESOLVED_IMPORT' && 
            warning.message.includes('/frontend/Images/')) {
          return;
        }
        warn(warning);
      },
      output: {
              assetFileNames: 'assets/[name].[hash][extname]',

      }
    }
  },
  publicDir: '/public', // Make sure this points to your public directory
});