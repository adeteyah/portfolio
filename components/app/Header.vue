<template>
  <div class="grid gap-8 lg:gap-11">
    <UiNavbar />

    <!-- Conditionally render based on the route -->
    <UiHero v-if="isHome" />
    <UiSubtitle v-if="isHome" />
  </div>
</template>

<script setup>
import { useRoute } from "vue-router";

const route = useRoute();

// Determine if the current route is the home page ('/')
const isHome = route.path === "/";
</script>
