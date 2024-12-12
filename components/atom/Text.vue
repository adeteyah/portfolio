<template>
  <div class="grid gap-11">
    <div class="indent-28 opacity-50 text-lg md:text-xl lg:text-2xl uppercase">
      [ <slot name="title" /> ]
    </div>
    <div
      class="indent-28 text-2xl md:text-3xl lg:text-4xl leading-relaxed md:leading-loose lg:leading-loose"
    >
      <slot name="text" />
    </div>
  </div>
</template>
