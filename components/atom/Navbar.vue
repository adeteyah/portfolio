<template>
  <nav class="relative flex justify-between md:text-base">
    <NuxtLink
      to="/"
      class="group font-semibold"
      :class="route.path !== '/' ? 'opacity-50' : 'opacity-100'"
    >
      A<span
        class="lg:opacity-0 group-hover:opacity-100 transition-opacity duration-500 hidden lg:inline-block"
        >ditiya</span
      >
      R<span
        class="lg:opacity-0 group-hover:opacity-100 transition-opacity duration-1000 hidden lg:inline-block"
        >achman</span
      >
    </NuxtLink>
    <div class="flex gap-4 md:gap-5 lg:gap-6">
      <NuxtLink
        to="/work"
        :class="route.path !== '/work' ? 'opacity-50' : 'opacity-100'"
      >
        Work
      </NuxtLink>
      <AtomDarkModeToggler />
    </div>
  </nav>
</template>
<script setup>
const route = useRoute();
</script>
