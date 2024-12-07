<template>
  <div>
    <h1>Color mode: {{ $colorMode.value }}</h1>
    <select v-model="$colorMode.preference">
      <option value="system">System</option>
      <option value="light">Light</option>
      <option value="dark">Dark</option>
      <option value="sepia">Sepia</option>
    </select>
  </div>
  <section>
    <div class="grid lg:grid-cols-3 -mx-4">
      <div
        class="px-4 pt-4 hover:bg-gray rounded transition-colors duration-500"
        v-for="work in workData.slice(0, 3)"
        :key="work.id"
      >
        <NuxtLink class="group no-hover grid" :to="`/work/${work.id}`">
          <div
            class="rounded relative w-full h-[400px] p-14 group-hover:p-0 bg-gray transition-all duration-500"
          >
            <NuxtImg
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
  </section>
  <section>
    <UiText>
      <template #title>About</template>
      <template #text>
        I'm a designer 🎨 and developer 🧑‍💻 dedicated to creating user-friendly
        solutions that prioritize comfort, simplicity, and seamless
        functionality in every project. My work spans the entire development
        lifecycle—from strategic planning to final product launch.
      </template>
    </UiText>
  </section>
</template>
<script setup>
import work from "~/assets/data/work.js";
const workData = work;

const colorMode = useColorMode();

console.log(colorMode.preference);
</script>

<style>
body {
  background-color: #fff;
  color: rgba(0, 0, 0, 0.8);
}
.dark-mode body {
  background-color: #091a28;
  color: #ebf4f1;
}
.sepia-mode body {
  background-color: #f1e7d0;
  color: #433422;
}
</style>
