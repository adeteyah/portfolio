<template>
  <div class="px-8 md:px-24 lg:px-40 py-11">
    <transition name="noizer" mode="out-in">
      <div key="$route.path" class="grid gap-4 lg:gap-11">
        <div class="noise" v-if="isTransitioning" />
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
      }, 500);
    },
  },
};
</script>
