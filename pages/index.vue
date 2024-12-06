<template>
  <div class="grid lg:grid-cols-4 gap-4 lg:gap-8">
    <div v-for="work in works.slice(0, 4)" :key="work.id">
      <nuxt-link class="no-hover" :to="`/work/${work.id}`">
        <div class="relative w-full h-[300px]">
          <img
            class="rounded object-cover w-full h-full"
            :src="work.image"
            :alt="work.title"
          />
        </div>
        <h3 class="text-3xl py-4 font-semibold">{{ work.title }}</h3>
        <hr class="opacity-10" />
        <div class="flex justify-between py-4 opacity-50">
          <p>{{ work.year }}</p>
          <p>{{ work.year }}</p>
        </div>
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
