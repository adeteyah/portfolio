import Lenis from "lenis";

export default defineNuxtPlugin(() => {
  const lenis = new Lenis({
    smooth: true,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);

  // Expose lenis globally if needed
  return {
    provide: {
      lenis,
    },
  };
});
