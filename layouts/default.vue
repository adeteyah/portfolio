<template>
  <div key="$route.path" class="grid gap-8 py-8">
    <AppHeader />
    <slot />
    <AppFooter />
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
