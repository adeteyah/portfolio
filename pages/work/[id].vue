<!-- <template>
  <div class="relative">
    <img
      class="object-cover w-full h-full rounded-t-md"
      :src="currentWork.image"
      :alt="currentWork.title"
    />
  </div>

  <h3 class="text-xl font-semibold">
    {{ currentWork.title }}
  </h3>
  <p class="text-3xl font-regular opacity-50">{{ currentWork.year }}</p>
  <p class="text-xl font-regular opacity-50">
    {{ currentWork.service }}
  </p>
  <hr class="opacity-10" />
</template>
<script setup>
import { useRoute } from "vue-router";
import work from "~/assets/data/work.js";
const route = useRoute();
const currentWork = work.find((item) => item.id === parseInt(route.params.id));
definePageMeta({
  layout: "work",
});
</script> -->
<template></template>
