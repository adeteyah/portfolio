<template>
  <div class="flex gap-4">
    <div class="bg-[red] w-1/3 flex flex-col justify-between h-[100svh]">
      <div>Test</div>
      <div>Test</div>
    </div>
    <div class="bg-[blue] w-2/3">
      <slot />
      <slot />
    </div>
  </div>
</template>
