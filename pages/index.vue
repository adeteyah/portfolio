<template>
  <section>
    <AtomHero>
      I'm a creative designer & developer based in Bandung. I specialize in
      taking projects from 0 &rarr; 1 in design or building an app ─ website.
      <NuxtLink to="/" class="text-sm md:text-xl lg:text-2xl align-top"
        >(More)</NuxtLink
      >
    </AtomHero>
  </section>
  <section>
    <AtomSubtitle>
      <template #firstText> I design for user comfort </template>
      <template #secondText> I build to bring simplicity to systems </template>
      <template #thirdText> Let’s make your vision come alive! </template>
    </AtomSubtitle>
  </section>
  <section><WorkGrid :shouldSlice="true" /></section>
  <section>
    <AtomText>
      <template #title>Contact</template>
      <template #text>
        I'm a designer 🎨 and developer 🧑‍💻 dedicated to creating user-friendly
        solutions that prioritize comfort, simplicity, and seamless
        functionality in every project. My work spans the entire development
        lifecycle—from strategic planning to final product launch.
      </template>
    </AtomText>
    <div class="flex gap-4 md:gap-5 lg:gap-6 text-base">
      <NuxtLink to="/work">adeteyah@gmail.com</NuxtLink>
      <NuxtLink to="/work">+62 85156012239</NuxtLink>
    </div>
  </section>
</template>
