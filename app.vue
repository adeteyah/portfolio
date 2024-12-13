<template>
  <div class="noise"></div>
  <NuxtLayout>
    <NuxtPage :transition="pageTransition" />
  </NuxtLayout>
</template>

<script>
export default {
  data() {
    return {
      pageTransition: {
        name: "page",
      },
    };
  },
};
</script>
