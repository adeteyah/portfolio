<template>
  <div class="flex gap-4 py-8">
    <div class="bg-[red] w-1/3 flex flex-col justify-between">
      <div>Test</div>
      <div>Test</div>
    </div>
    <div class="bg-[blue] w-2/3">
      <slot />
      <slot />
    </div>
  </div>
</template>
