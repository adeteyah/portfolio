<template>
  <div class="grid lg:grid-cols-2 gap-4 lg:gap-8">
    <div v-for="work in works" :key="work.id">
      <nuxt-link class="no-hover" :to="`/work/${work.id}`">
        <img class="rounded-md" :src="work.image" :alt="work.title" />
        <h3 class="text-3xl py-4 font-semibold">{{ work.title }}</h3>
        <hr class="opacity-10" />
        <p></p>
      </nuxt-link>
    </div>
  </div>
</template>
<script>
import { works } from "~/data/work.js";
export default {
  data() {
    return {
      works,
    };
  },
};
</script>
