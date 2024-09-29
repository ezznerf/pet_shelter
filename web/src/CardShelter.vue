<script setup>
defineProps({
  id: Number,
  title: String,
  text: String,
  imgUrl: String
})
</script>

<style>
p {
  display: -webkit-box;
  -webkit-line-clamp: 6;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>

<template>
  <router-link :to="{ name: 'ShelterInfo', params: { id: id } }">
    <div
      class="flex items-start border border-slate-100 rounded-3xl p-5 cursor-pointer hover:-translate-y-2 hover:shadow-xl transition backdrop-brightness-10 bg-white/30"
    >
      <img :src="imgUrl" alt="foto" class="w-48 h-48 object-cover mr-8" />
      <div class="flex flex-col">
        <b class="text-2xl">{{ title }}</b>
        <p
          class="gap-5 text-xl subpixel-antialiased font-semibold text-neutral-900"
          style="text-indent: 1.5rem"
        >
          {{ text }}
        </p>
      </div>
    </div>
  </router-link>
</template>
