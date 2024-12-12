<template>
  <setion class="grid gap-4 indent-12 md:indent-24 lg:indent-32">
    <div class="text-lg uppercase opacity-50">[ <slot name="title" /> ]</div>
    <div
      class="text-xl md:text-2xl lg:text-3xl leading-relaxed md:leading-loose lg:leading-loose"
    >
      <slot name="text" />
    </div>
  </setion>
</template>
