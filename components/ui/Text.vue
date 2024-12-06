<template>
  <div class="grid gap-11">
    <div class="indent-28 opacity-50 text-xl md:text-2xl lg:text-3xl uppercase">
      [ <slot name="title" /> ]
    </div>
    <div class="indent-28 text-3xl md:text-4xl lg:text-5xl lg:leading-relaxed">
      <slot name="text" />
    </div>
  </div>
</template>
