<template>
  <div id="canvas"></div>
  <!-- div used to create our plane -->
  <div class="plane">
    <!-- image that will be used as texture by our plane -->
    <img
      src="https://assets.awwwards.com/awards/submissions/2024/02/65c3a43c2f798911476445.jpg"
      crossorigin=""
    />
  </div>
</template>

<style scoped>
#canvas {
  /* make the canvas wrapper fits the document */
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}
.plane {
  /* define the size of your plane */
  width: 80%;
  height: 80vh;
  margin: 10vh auto;
}
.plane img {
  /* hide the img element */
  display: none;
}
</style>
