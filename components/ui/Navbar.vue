<template>
  <nav class="relative flex justify-between md:text-base">
    <NuxtLink to="/" class="group font-semibold hover:no-underline">
      A<span
        class="lg:text-transparent group-hover:text-black transition-colors duration-500"
        >ditiya</span
      >
      R<span
        class="lg:text-transparent group-hover:text-black transition-colors duration-1000"
        >achman</span
      >
    </NuxtLink>
    <div class="flex gap-4 md:gap-5 lg:gap-6">
      <NuxtLink
        to="/work"
        :class="route.path === '/work' ? 'no-hover' : 'blur-[1px]'"
      >
        Work
      </NuxtLink>
      <NuxtLink
        to="/about"
        :class="route.path === '/about' ? 'no-hover' : 'blur-[1px]'"
      >
        About
      </NuxtLink>
      <NuxtLink
        to="/contact"
        :class="route.path === '/contact' ? 'no-hover' : 'blur-[1px]'"
      >
        Contact
      </NuxtLink>
    </div>
  </nav>
</template>
<script setup>
import { useRoute } from "vue-router";
const route = useRoute();
</script>
