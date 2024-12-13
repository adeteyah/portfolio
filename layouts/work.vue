<template>
  <div class="flex gap-8 py-8">
    <div class="self-stretch bg-[red] h-full">
      <AppHeader />
      <AppFooter />
    </div>
    <div><slot /></div>
  </div>
</template>
