<template>
  <div class="px-8 md:px-24 lg:px-40 py-11">
    <transition name="page" mode="out-in">
      <div key="$route.path" class="grid gap-4 lg:gap-11">
        <div class="black-screen" v-if="isTransitioning" />
        <AppHeader />
        <slot />
        <AppFooter />
      </div>
    </transition>
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
      }, 500); // Match this timeout with CSS animation duration
    },
  },
};
</script>
