<template>
  <div>
    <h1>{{ work.title }}</h1>
    <img :src="work.image" :alt="work.title" />
    <p>Year: {{ work.year }}</p>
    <p>Service: {{ work.service }}</p>
    <p>Industry: {{ work.industry }}</p>
    <p>Details: {{ work.details }}</p>
  </div>
</template>

<script setup>
import { useRoute } from "vue-router";
import works from "~/assets/data/work";

const route = useRoute();
const work = works.find((item) => item.id === Number(route.params.id));
</script>
