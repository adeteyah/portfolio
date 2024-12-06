<template>
  <div class="grid lg:grid-cols-3 -mx-4">
    <div
      class="px-4 pt-4 hover:bg-gray rounded transition-colors duration-500"
      v-for="work in works.slice(0, 4)"
      :key="work.id"
    >
      <NuxtLink class="group no-hover" :to="`/work/${work.id}`">
        <div
          class="rounded relative w-full h-[400px] p-4 group-hover:p-0 bg-gray transition-all duration-500"
        >
          <img
            class="rounded object-cover w-full h-full"
            :src="work.image"
            :alt="work.title"
          />
        </div>
        <h3 class="text-xl py-4 font-semibold">{{ work.title }}</h3>
        <hr class="opacity-10" />
        <div class="flex justify-between py-4 opacity-50">
          <p>{{ work.year }}</p>
          <p>{{ work.year }}</p>
        </div>
      </NuxtLink>
    </div>
  </div>
  <div class="flex justify-end">
    <NuxtLink to="/work">( See all work )</NuxtLink>
  </div>
</template>
<script setup lang="ts">
import { works } from "~/assets/data/work.js";
</script>
