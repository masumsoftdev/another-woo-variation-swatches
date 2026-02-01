import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  plugins: [vue()],

  server: {
    port: 5173,
    strictPort: true,
    cors: true,
    hmr: {
      protocol: 'ws',
      host: 'localhost',
    },
  },

  build: {
    outDir: 'build/admin',
    emptyOutDir: true,
    rollupOptions: {
      input: 'resources/admin/src/main.js',
      output: {
        entryFileNames: 'index.js',
        assetFileNames: 'style.css',
      },
    },
  },
})
