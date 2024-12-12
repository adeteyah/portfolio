<template>
  <div class="hidden lg:grid lg:grid-cols-3 opacity-50 gap-2 text-sm">
    <span class="lg:text-left">
      {{ firstText }}
    </span>
    <span class="lg:text-center">
      {{ secondText }}
    </span>
    <span class="lg:text-right">
      {{ thirdText }}
    </span>
  </div>
  <div class="lg:hidden opacity-50">
    {{ firstText }}. {{ secondText }}. {{ thirdText }}.
  </div>
</template>

<script>
export default {
  data() {
    return {
      firstText: "I design for user comfort",
      secondText: "I build to bring simplicity to systems",
      thirdText: "Let’s make your vision come alive!",
    };
  },
};
</script>
