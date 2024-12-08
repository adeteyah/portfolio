<template>
  <div ref="curtainsCanvas" class="curtains-container">
    <canvas></canvas>
    <div
      v-for="(image, index) in images"
      :key="index"
      class="curtains-image"
      ref="imageRefs"
    >
      <img :src="image" alt="Curtains.js Effect" />
    </div>
  </div>
</template>

<script>
import { createPlane } from "curtainsjs"; // Import Plane creation utility (if needed)

export default {
  data() {
    return {
      curtains: null, // Holds the Curtains instance
      images: [
        // List of image URLs
        "Logo.svg",
        "Logo.svg",
      ],
    };
  },
  mounted() {
    this.initCurtains();
  },
  methods: {
    initCurtains() {
      // Create Curtains instance
      this.curtains = new this.$curtains({
        container: this.$refs.curtainsCanvas,
        pixelRatio: Math.min(2.0, window.devicePixelRatio),
      });

      // Loop over each image to create planes
      this.$refs.imageRefs.forEach((imageRef) => {
        this.createCurtainsPlane(imageRef);
      });
    },
    createCurtainsPlane(imageRef) {
      const plane = this.curtains.addPlane(imageRef, {
        vertexShader: `
          attribute vec3 aVertexPosition;
          attribute vec2 aTextureCoord;

          uniform mat4 uMVMatrix;
          uniform mat4 uPMatrix;

          varying vec3 vVertexPosition;
          varying vec2 vTextureCoord;

          void main() {
              gl_Position = uPMatrix * uMVMatrix * vec4(aVertexPosition, 1.0);

              vVertexPosition = aVertexPosition;
              vTextureCoord = aTextureCoord;
          }
        `,
        fragmentShader: `
          precision mediump float;

          varying vec3 vVertexPosition;
          varying vec2 vTextureCoord;

          uniform sampler2D uSampler;

          void main() {
              vec4 color = texture2D(uSampler, vTextureCoord);
              gl_FragColor = vec4(color.rgb, 1.0);
          }
        `,
        // Textures and other settings
        uniforms: {},
      });

      // Customize the plane's behavior (optional)
      if (plane) {
        plane.onRender(() => {
          // Add any animation or effect logic here
        });
      }
    },
  },
  beforeDestroy() {
    // Cleanup
    if (this.curtains) this.curtains.dispose();
  },
};
</script>

<style>
.curtains-container {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

.curtains-image {
  display: none;
}
</style>
