<template>
  <footer>
    <transition name="fade" mode="out-in">
      <div class="w-56" v-if="isHomePage" key="hero">
        <IconsAR />
      </div>
    </transition>
    <div
      class="flex gap-4 md:gap-5 lg:gap-6 py-8 justify-between lg:justify-end"
    >
      <a target="_blank" href="https://adeteyah.medium.com/">Medium</a>
      <a target="_blank" href="https://x.com/adeteyah">Twitter</a>
      <a target="_blank" href="https://www.instagram.com/adeteyah">Instagram</a>
      <a target="_blank" href="https://github.com/adeteyah">GitHub</a>
    </div>
    <div class="flex justify-between opacity-50">
      <small>&copy; 2024</small>
      <small>Design & Developed by Adeteyah</small>
    </div>
  </footer>
</template>
<script setup>
const route = useRoute();
const isHomePage = computed(() => route.path === "/");
</script>
