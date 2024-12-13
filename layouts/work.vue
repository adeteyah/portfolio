<template>
  <div class="flex bg-[yellow] min-h-[100svh] gap-8 py-8">
    <div class="bg-[red] flex-col justify-between">
      <AppHeader />
      <AppFooter />
    </div>
    <div><slot /></div>
  </div>
</template>
