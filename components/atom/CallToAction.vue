<template>
  <section class="flex justify-center">
    <div class="cta"><slot></slot></div>
  </section>
</template>
<style scoped>
.cta > * {
  @apply px-8 py-4 bg-gray rounded-lg hover:rounded-xl transition-all duration-200;
}
</style>
