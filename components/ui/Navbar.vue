<template>
  <nav class="relative flex justify-between md:text-base">
    <NuxtLink to="/" class="group font-semibold hover:no-underline">
      A<span
        class="lg:text-white group-hover:text-black transition-colors duration-500"
        >ditiya</span
      >
      R<span
        class="lg:text-white group-hover:text-black transition-colors duration-1000"
        >achman</span
      >
    </NuxtLink>
    <div class="flex gap-4 md:gap-5 lg:gap-6">
      <NuxtLink to="/work" :class="{ 'blur-[1px]': route.path !== '/work' }">
        Work
      </NuxtLink>
      <NuxtLink to="/about" :class="{ 'blur-[1px]': route.path !== '/about' }">
        About
      </NuxtLink>
      <NuxtLink
        to="/contact"
        :class="{ 'blur-[1px]': route.path !== '/contact' }"
      >
        Contact
      </NuxtLink>
    </div>
  </nav>
</template>

<script setup>
const route = useRoute();
</script>
