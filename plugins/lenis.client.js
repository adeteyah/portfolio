import Lenis from "lenis";

export default defineNuxtPlugin((nuxtApp) => {
  const lenis = new Lenis({
    smooth: true,
    lerp: 0.08,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);

  // Add lenis to the Vue instance
  nuxtApp.vueApp.provide("lenis", lenis);
  nuxtApp.provide("lenis", lenis);
});
