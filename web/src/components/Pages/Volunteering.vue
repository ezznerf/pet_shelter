<script setup>
import { onMounted, ref } from 'vue'
import axios from 'axios'
import CardVol from '@/components/CardVol.vue'

const items = ref([]) 

onMounted(async () => {
  try {
    const { data } = await axios.get('https://3d7f9dd34af77338.mokky.dev/vol')
    console.log('Response data:', data)
    items.value = data
  } catch (err) {
    console.log(err)
  }
})
</script>

<template>
  <div class="flex justify-center mt-10 text-3xl">
    <b>Волонтёрство</b>
  </div>
  <div class="mt-5 p-10 grid-cols-1 gap-10 grid gap-4">
    <CardVol
      v-for="item in items"
      :key="item.id"
      :id="item.id"
      :name="item.name"
      :img-url="item.imgUrl"
      :description="item.description"
      
    />
  </div>
</template>