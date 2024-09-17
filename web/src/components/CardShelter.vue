<script setup>
defineProps({
  title: String,
  text: String,
  imgUrl: String
})
</script>

<style>
p {
  display: -webkit-box;
  -webkit-line-clamp: 8; /* Ограничение на 8 строк */
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>

<template>
  <div
    class="relative border border-slate-100 rounded-3xl p-8 cursor-pointer hover:-translate-y-2 hover:shadow-xl transition flex"
  >
    <img :src="imgUrl" alt="foto" class="w-64 h-64 object-cover" />
    <div class="ml-16 flex flex-col">
      <b class="text-2xl">{{ title }}</b>
      <p
        class="gap-5 text-xl subpixel-antialiased font-semibold text-neutral-900"
        style="text-indent: 1.5rem"
      >
        {{ text }}
      </p>
    </div>
  </div>
</template>
