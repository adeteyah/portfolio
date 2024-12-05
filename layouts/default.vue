<template>
  <div class="max-w-[420px] md:max-w-[720px] lg:max-w-[1920px] mx-auto">
    <div class="px-8 md:px-24 lg:px-40 py-11">
      <div class="grid gap-4 lg:gap-11">
        <AppHeader />
        <slot />
        <AppFooter />
      </div>
    </div>
  </div>
</template>
