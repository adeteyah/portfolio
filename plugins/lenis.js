import Lenis from "lenis";

let lenis;

export default ({ app }) => {
  if (process.client) {
    lenis = new Lenis({
      smooth: true,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
  }
};
