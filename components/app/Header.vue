<template>
  <div class="grid gap-8 lg:gap-11">
    <UiNavbar />
    <UiHero :class="route.path === '/' ? 'no-hover' : 'blur-[1px]'" />
    <UiSubtitle :class="route.path === '/' ? 'no-hover' : 'blur-[1px]'" />
  </div>
</template>
<script setup>
import { useRoute } from "vue-router";
const route = useRoute();
</script>
