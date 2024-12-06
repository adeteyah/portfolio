<template>
  Test
  <div class="grid lg:grid-cols-2 gap-4 lg:gap-8">
    <div v-for="work in work" :key="work.id">
      <nuxt-link class="group no-hover" :to="`/work/${work.id}`">
        <div
          class="relative w-full h-[600px] bg-gray p-8 flex items-center group-hover:bg-black transition-colors duration-500"
        >
          <NuxtImg
            class="rounded object-cover w-full h-[420px]"
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
import { work } from "~/assets/data/work.js";
export default {
  data() {
    return {
      work,
    };
  },
};
</script>
