<template>
  <div class="grid grid-cols-2 gap-4 lg:gap-12">
    <div v-for="work in works" :key="work.id">
      <img :src="work.image" :alt="work.title" />
      <h2>{{ work.title }}</h2>
      <p><strong>Tech Stack:</strong> {{ work.techstack.join(", ") }}</p>
      <p><strong>Year:</strong> {{ work.year }}</p>
      <p>{{ work.details }}</p>
      <nuxt-link :to="`/work/${work.id}`">View Details</nuxt-link>
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
