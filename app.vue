<template>
  <div class="noise"></div>
  <NuxtLayout>
    <NuxtPage />
  </NuxtLayout>
</template>
<script>
import Lenis from "lenis";
const lenis = new Lenis({
  autoRaf: true,
});
lenis.on("scroll", (e) => {
  console.log(e);
});
</script>
