<template>
  <setion class="grid gap-4 indent-12 md:indent-24 lg:indent-32">
    <div class="uppercase opacity-50 text-sm">[ <slot name="title" /> ]</div>
    <div class="paragraph">
      <slot name="text" />
    </div>
  </setion>
</template>
