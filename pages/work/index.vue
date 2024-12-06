<template>
  <div v-for="work in works" :key="work.id" class="work-item">
    <img :src="work.image" :alt="work.title" class="work-image" />
    <h2>{{ work.title }}</h2>
    <p><strong>Tech Stack:</strong> {{ work.techstack.join(", ") }}</p>
    <p><strong>Year:</strong> {{ work.year }}</p>
    <p>{{ work.details }}</p>
    <nuxt-link :to="`/work/${work.id}`" class="details-link"
      >View Details</nuxt-link
    >
  </div>
</template>

<script>
import { works } from "~/data/work.js"; // Adjust path as needed

export default {
  data() {
    return {
      works, // Assign imported data to a local property
    };
  },
};
</script>
