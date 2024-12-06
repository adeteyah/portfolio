<template>
  <div>
    <h1>Test</h1>
    <div class="grid lg:grid-cols-2 gap-4 lg:gap-8">
      <div v-for="item in allWork" :key="item.id">
        <nuxt-link class="group no-hover" :to="`/work/${item.id}`">
          <div
            class="relative w-full h-[600px] bg-gray p-8 flex items-center group-hover:bg-black transition-colors duration-500"
          >
            <img
              class="rounded object-cover w-full h-[420px]"
              :src="item.image"
              :alt="item.title"
            />
          </div>
          <h3 class="text-3xl py-4 font-semibold">{{ item.title }}</h3>
          <hr class="opacity-10" />
          <div class="flex justify-between py-4 opacity-50">
            <p>{{ item.year }}</p>
            <p>{{ item.year }}</p>
          </div>
        </nuxt-link>
      </div>
    </div>
  </div>
</template>
<script setup lang="ts">
import work from "~/assets/data/work.js";
const allWork = work;
</script>
