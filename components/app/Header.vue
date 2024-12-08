<template>
  <div class="grid gap-8 lg:gap-11">
    <UiNavbar />
    <transition name="fade" mode="out-in">
      <div v-if="isHomePage" key="hero">
        <UiHero />
        <UiSubtitle />
      </div>
    </transition>
  </div>
</template>
<script setup>
const route = useRoute();
const isHomePage = computed(() => route.path === "/");
</script>
