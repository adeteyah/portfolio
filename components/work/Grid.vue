<template>
  <div>
    <div class="grid lg:grid-cols-2 gap-y-16 gap-x-8">
      <div
        v-for="work in shouldSlice ? workData.slice(0, 2) : workData"
        :key="work.id"
      >
        <nuxt-link class="group grid gap-8" :to="`/work/${work.id}`">
          <div
            class="relative bg-gray lg:group-hover:bg-gray/25 flex items-center transition-all duration-500 aspect-video px-4 pt-8 lg:group-hover:pt-4"
          >
            <img
              class="object-cover w-full h-full rounded-t-md"
              :src="work.image"
              :alt="work.title"
            />
          </div>
          <div class="grid gap-4">
            <h3
              class="text-3xl font-semibold lg:opacity-75 lg:group-hover:opacity-100 transition-all duration-500"
            >
              {{ work.title }}
            </h3>
            <hr class="opacity-10" />
            <div
              class="flex justify-between opacity-50 lg:group-hover:opacity-100 transition-all duration-500"
            >
              <p>{{ work.service }}</p>
              <p>{{ work.year }}</p>
            </div>
          </div>
        </nuxt-link>
      </div>
    </div>
  </div>
</template>

<script setup>
import work from "~/assets/data/work.js";
const props = defineProps({
  shouldSlice: {
    type: Boolean,
    default: true,
  },
});
const workData = work;
</script>
