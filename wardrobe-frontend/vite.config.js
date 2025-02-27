import { fileURLToPath, URL } from 'node:url';
import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import vueDevTools from 'vite-plugin-vue-devtools';

// https://vite.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    vueDevTools(),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url)),
    },
  },
  server: {
    proxy: {
      '/api': {
        target: 'http://localhost:8000', // Laravel backend URL
        changeOrigin: true, // Required for CORS
        secure: false, // Disable SSL verification (for local development)
        rewrite: (path) => path.replace(/^\/api/, ''), // Remove /api prefix if needed
      },
    },
  },
});