<template>
  <div class="grid grid-cols-2 bg-[yellow]">
    <div class="bg-[red] w-1/3">
      <div>Test</div>
      <div>Test</div>
      <div>Test</div>
    </div>
    <div class="bg-[blue] w-2/3">
      <slot />
    </div>
  </div>
</template>
