<template>
  <div class="grid gap-8 lg:gap-11">
    <UiNavbar />
    <UiHero v-if="isHomePage" />
    <UiSubtitle v-if="isHomePage" />
  </div>
</template>
<script setup>
const route = useRoute();
const isHomePage = computed(() => route.path === "/");
</script>
