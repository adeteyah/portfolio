<template>
  <div class="hidden lg:grid lg:grid-cols-3 opacity-50 gap-2 text-sm">
    <span class="lg:text-left">
      <slot name="firstText" />
    </span>
    <span class="lg:text-center">
      <slot name="secondText" />
    </span>
    <span class="lg:text-right">
      <slot name="thirdText" />
    </span>
  </div>
  <div class="lg:hidden opacity-50">
    <slot name="firstText" />. <slot name="secondText" />.
    <slot name="thirdText" />.
  </div>
</template>

<script>
export default {
  name: "ResponsiveText",
};
</script>
