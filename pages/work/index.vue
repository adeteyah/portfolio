<template>
  <section class="grid lg:grid-cols-2 gap-4 lg:gap-8">
    <div v-for="work in workData" :key="work.id">
      <nuxt-link class="group no-hover grid" :to="`/work/${work.id}`">
        <div
          class="relative bg-gray hover:bg-gray/15 px-8 py-16 min-[1600px]:py-24 flex items-center transition-colors duration-500"
        >
          <img
            class="rounded object-cover w-full h-[240px] md:h-[320px] lg:h-[240px] min-[1600px]:h-[480px]"
            :src="work.image"
            :alt="work.title"
          />
        </div>
        <h3
          class="text-3xl py-6 font-semibold lg:opacity-50 lg:group-hover:opacity-100 transition-all duration-500"
        >
          {{ work.title }}
        </h3>
        <hr class="opacity-10" />
        <div class="flex justify-between py-4 opacity-25">
          <p>{{ work.year }}</p>
          <p
            class="lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-500"
          >
            {{ work.year }}
          </p>
        </div>
      </nuxt-link>
    </div>
  </section>
</template>
<script setup>
import work from "~/assets/data/work.js";
const workData = work;
</script>
