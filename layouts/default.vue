<template>
  <div class="px-8 md:px-24 lg:px-40 py-11">
    <div key="$route.path" class="grid gap-4 lg:gap-11">
      <AppHeader />
      <slot />
      <AppFooter />
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isTransitioning: false,
    };
  },
  watch: {
    $route(to, from) {
      this.isTransitioning = true;
      setTimeout(() => {
        this.isTransitioning = false;
      }, 500);
    },
  },
};
</script>
