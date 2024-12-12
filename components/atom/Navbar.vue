<template>
  <nav class="relative flex justify-between md:text-base">
    <NuxtLink
      data-value="digital world"
      to="/"
      class="group font-semibold hover:no-underline"
    >
      A<span
        class="lg:opacity-0 group-hover:opacity-100 transition-opacity duration-500"
        >ditiya</span
      >
      R<span
        class="lg:opacity-0 group-hover:opacity-100 transition-opacity duration-1000"
        >achman</span
      >
    </NuxtLink>
    <div class="flex gap-4 md:gap-5 lg:gap-6">
      <NuxtLink
        data-value="Work"
        to="/work"
        :class="route.path === '/work' ? 'no-hover' : 'blur-[1px]'"
      >
        Work
      </NuxtLink>
      <NuxtLink
        data-value="About"
        to="/about"
        :class="route.path === '/about' ? 'no-hover' : 'blur-[1px]'"
      >
        About
      </NuxtLink>
      <NuxtLink
        data-value="Contact"
        to="/contact"
        :class="route.path === '/contact' ? 'no-hover' : 'blur-[1px]'"
      >
        Contact
      </NuxtLink>

      <AtomDarkModeToggler />
    </div>
  </nav>
</template>
<script setup>
const route = useRoute();
</script>
