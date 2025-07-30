import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        // Add JS if needed:
        // 'resources/js/app.js'
      ],
      refresh: true,
    }),
  ],

  // Proper assets handling
  assetsInclude: [],

  // Resolve aliases
  resolve: {
    alias: {
      '@': '/resources',
      '~': resolve(__dirname, 'public')
    },
  },

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
        chunkFileNames: 'assets/js/[name].[hash].js',
        entryFileNames: 'assets/js/[name].[hash].js',
      }
    }
  },

  // Correct publicDir configuration
  publicDir: false,
});