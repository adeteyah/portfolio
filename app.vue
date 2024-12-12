<template>
  <div class="noise"></div>
  <NuxtLayout>
    <div class="page-content">
      <NuxtPage :transition="pageTransition" />
    </div>
  </NuxtLayout>
</template>

<script>
export default {
  data() {
    return {
      pageTransition: {
        name: "page",
        mode: "in-out", // Ensures the leave transition finishes before enter
      },
    };
  },
};
</script>
