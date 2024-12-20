import { defineNuxtConfig } from "nuxt/config";

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: "2024-11-01",
  devtools: { enabled: true },
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
  modules: ["@nuxt/fonts", "@nuxt/image", "@nuxtjs/color-mode"],
  css: ["~/assets/css/main.css"],
  devServer: {
    host: "localhost",
    port: 3000,
    https: false,
  },
  // app: {
  //   pageTransition: { name: "fade" },
  //   layoutTransition: { name: "fade" },
  // },
  plugins: ["~/plugins/lenis.client.js"],
  experimental: {
    renderJsonPayloads: false,
  },
});
