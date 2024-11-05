<script setup>
defineProps({
  id: Number,
  name: String,
  description: String,
  imgUrl: String,
  need: String,
  unit: String,
  count: Number,
  brand: String,
  location: String,
  phone_number: Number
  
})
</script>

<style scoped>
p {
  display: -webkit-box;
  -webkit-line-clamp: 6;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
.card-background {
  background-color: rgba(255, 255, 255, 0.4);
  color: black; 
}
</style>

<template>
  <router-link :to="{ name: 'ShelterInfo', params: { id: id } }">
    <div class="flex items-start border border-slate-100 rounded-3xl p-5 cursor-pointer hover:-translate-y-2 hover:shadow-xl transition card-background">
      <img :src="imgUrl" alt="foto" class="w-48 h-48 object-cover mr-8 rounded-3xl" style="flex-shrink: 0" />
      <div class="flex flex-col">
        <b class="text-2xl " style="text-indent: 1.5rem">{{ name }}</b>
        <p class="gap-5 text-xl subpixel-antialiased font-semibold text-neutral-900" style="text-indent: 1.5rem">
          {{ description }}
        </p>
      </div>
    </div>
  </router-link>
</template>