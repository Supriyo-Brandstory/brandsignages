import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        // Add your JS entry point if needed:
        // 'resources/js/app.js'
      ],
      refresh: true,
    }),
  ],

  // Resolve aliases
  resolve: {
    alias: {
      '@': '/resources',
      '~': resolve(__dirname, 'public') // For public directory references
    },
  },

  // Build configuration
  build: {
    outDir: 'public/build',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      external: [
        // Add paths you want to exclude from processing
        '/frontend/Images/**'
      ],
      output: {
        assetFileNames: (assetInfo) => {
          // Organize assets by type
          if (assetInfo.name.endsWith('.css')) {
            return 'assets/css/[name].[hash][extname]';
          }
          return 'assets/[name].[hash][extname]';
        },
        chunkFileNames: 'assets/js/[name].[hash].js',
        entryFileNames: 'assets/js/[name].[hash].js',
      },
    },
  },

  // Server configuration for development
  server: {
    strictPort: true,
    hmr: {
      host: 'localhost',
    },
  },

  // Disable publicDir since we're using Laravel's public directory
  publicDir: false,
});