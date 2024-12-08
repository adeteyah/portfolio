// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: "2024-11-01",
  devtools: { enabled: true },
  modules: [
    "@nuxtjs/tailwindcss",
    "@nuxt/fonts",
    "@nuxt/image",
    "@nuxtjs/color-mode",
  ],
  css: ["~/assets/css/main.css"],
  devServer: {
    host: "localhost",
    port: 3000,
    https: false,
  },
  app: {
    pageTransition: { name: "page", mode: "in-out" },
  },
  plugins: ["~/plugins/lenis.client.js"],
});
