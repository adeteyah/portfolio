<template>
  <section>
    <div class="grid lg:grid-cols-3 gap-y-16 gap-x-8">
      <div v-for="work in workData.slice(0, 6)" :key="work.id">
        <nuxt-link class="group no-hover grid gap-8" :to="`/work/${work.id}`">
          <div
            class="relative bg-gray lg:group-hover:bg-gray/15 flex items-center transition-all duration-500 aspect-video px-12 pt-16 lg:group-hover:pt-6"
          >
            <img
              class="object-cover w-full h-full rounded-t-lg"
              :src="work.image"
              :alt="work.title"
            />
          </div>
          <div class="grid gap-4">
            <h3
              class="text-3xl font-semibold lg:opacity-50 lg:group-hover:opacity-100 transition-all duration-500"
            >
              {{ work.title }}
            </h3>
            <hr class="opacity-10" />
            <div
              class="flex justify-between opacity-25 lg:group-hover:opacity-100 transition-all duration-500"
            >
              <p>{{ work.service }}</p>
              <p>{{ work.year }}</p>
            </div>
          </div>
        </nuxt-link>
      </div>
    </div>
    <UiCallToAction> <NuxtLink to="/">All work</NuxtLink> </UiCallToAction>
  </section>
</template>
<script setup>
import work from "~/assets/data/work.js";
import CallToAction from "../ui/CallToAction.vue";
const workData = work;
</script>
