<template>
  <div class="grid lg:grid-cols-4 gap-4 lg:gap-8">
    <div v-for="work in workData" :key="work.id">
      <nuxt-link class="group no-hover" :to="`/work/${work.id}`">
        <div
          class="relative bg-gray p-8 flex items-center group-hover:bg-black transition-colors duration-500"
        >
          <img
            class="rounded object-cover w-full h-[200px]"
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
<script setup>
import work from "~/assets/data/work.js";
const workData = work;
</script>
