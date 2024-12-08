<template>
  <div ref="canvasContainer" class="canvas-container">
    <!-- Add your elements with data-planes here -->
    <div class="plane" data-curtains>
      <div class="plane-content">
        <img
          src="https://assets.awwwards.com/awards/submissions/2024/02/65c3a43c2f798911476445.jpg"
          alt="Curtain effect"
        />
      </div>
    </div>
  </div>
</template>

<script>
import { Curtains } from "curtainsjs";

export default {
  data() {
    return {
      curtains: null,
    };
  },
  mounted() {
    // Initialize Curtain.js
    this.curtains = new Curtains({
      container: this.$refs.canvasContainer,
    });

    // Example of adding planes to the scene
    this.curtains.onContextLost(() => {
      this.curtains.restoreContext();
    });

    this.curtains.onError(() => {
      console.error("Curtains.js could not be initialized.");
    });

    // Define planes and effects
    this.initPlanes();
  },
  beforeDestroy() {
    if (this.curtains) {
      this.curtains.dispose();
    }
  },
  methods: {
    initPlanes() {
      const planeElements = document.querySelectorAll(".plane");

      planeElements.forEach((planeElement) => {
        this.curtains.addPlane(planeElement);
      });
    },
  },
};
</script>

<style scoped>
.canvas-container {
  position: relative;
  width: 100%;
  height: 100%;
  background-color: red;
}
.plane {
  width: 100%;
  height: auto;
}
</style>
