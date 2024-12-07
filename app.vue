<template>
  <Lenis :options="options" root>
    <NuxtLayout>
      <NuxtPage />
    </NuxtLayout>
  </Lenis>
</template>
<script setup>
const options = {
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  orientation: "horizontal",
  gestureOrientation: "vertical",
};
</script>
