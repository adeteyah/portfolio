<template>
  <img
    class="w-full h-full transition-opacity duration-300"
    :src="imageSrc"
    alt="Aditiya Rachman"
    @mouseover="handleHover(true)"
    @mouseleave="handleHover(false)"
  />
</template>

<script>
export default {
  data() {
    return {
      imageSrc: "/LogoEnabled.svg", // Correct path for the public directory
    };
  },
  methods: {
    handleHover(isHovered) {
      this.imageSrc = isHovered
        ? "/LogoHover.svg" // Correct path for hover image
        : "/LogoEnabled.svg"; // Default path
    },
  },
};
</script>

<style>
/* Add transition for a seamless effect */
img {
  transition: opacity 0.3s ease-in-out;
}
</style>
