<template>
  <div class="flex-row lg:flex h-full min-h-[100svh] gap-8 py-8">
    <div>
      <AppHeader />
      <AppFooter />
    </div>
    <div><slot /></div>
  </div>
</template>
