<template>
  <section>
    <div v-if="currentWork" class="grid gap-8">
      <div>
        <div class="relative aspect-video shadow-inner">
          <img
            class="object-cover w-full h-full rounded-t-md"
            :src="currentWork.image"
            :alt="currentWork.title"
          />
        </div>
        <div class="flex flex-col lg:flex-row justify-between gap-2 mt-8">
          <h3 class="text-xl font-semibold">
            {{ currentWork.title }}
          </h3>
          <p class="text-3xl font-regular opacity-50">{{ currentWork.year }}</p>
          <p class="text-xl font-regular opacity-50">
            {{ currentWork.service }}
          </p>
          <hr class="opacity-10" />
        </div>
      </div>
    </div>
    <div v-else>
      <p>Work not found.</p>
    </div>
  </section>
</template>

<script setup>
import { useRoute } from "vue-router";
import work from "~/assets/data/work.js";

const route = useRoute();

// Find the work item based on the ID in the route
const currentWork = work.find((item) => item.id === parseInt(route.params.id));
</script>
