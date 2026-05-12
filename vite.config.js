import { resolve } from "path";
import { defineConfig } from "vite";

const themeName = "template";

export default defineConfig({
  root: themeName,
  build: {
    outDir: "assets",
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        // entry points
        index: resolve(__dirname, "src/js/index.js"),
      },
      output: {
        entryFileNames: "js/[name].[hash].js",
        chunkFileNames: "js/[name].[hash].js",
        assetFileNames: (assetInfo) => {
          if (/\.(css|scss)$/.test(assetInfo.name)) {
            return "css/[name].[hash].[ext]";
          }
          if (/\.(png|jpg|jpeg|gif|svg|webp)$/.test(assetInfo.name)) {
            return "images/[name].[hash].[ext]";
          }
          return "assets/[name].[hash].[ext]";
        },
      },
    },
    resolve: {
      alias: {
        "@": resolve(__dirname, `src`),
      },
    },
  },
});
