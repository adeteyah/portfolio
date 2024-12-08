import { Curtains } from "curtainsjs";

export default defineNuxtPlugin((nuxtApp) => {
  nuxtApp.provide("curtains", Curtains);
});
