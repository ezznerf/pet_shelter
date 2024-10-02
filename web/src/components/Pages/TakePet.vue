<script setup>
defineProps({
  id: Number,
  name: String,
  age: Number,
  pol: String,
  text: String,
  type: String,
  imgUrl: String
})
</script>
<style>
p {
  display: -webkit-box;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>

<template>
  <div
    class="flex items-start border border-slate-100 rounded-3xl p-5 cursor-pointer hover:-translate-y-2 hover:shadow-xl transition backdrop-brightness-10 bg-white/30 columns-2"
  >
    <img :src="imgUrl" alt="foto" class="w-48 h-48 object-cover mr-8" style="flex-shrink: 0" />
    <div class="flex flex-col">
      <p class="text-l">{{ type }} {{ name }}</p>
      <p class="text-l">Возраст: {{ age }}</p>
      <p class="text-l">Пол: {{ pol }}</p>
      <p class="text-l">Описание: {{ text }}</p>
    </div>
  </div>
</template>
