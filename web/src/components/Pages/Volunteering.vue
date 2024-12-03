<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios';
import CardVol from '@/components/CardVol.vue';

const items = ref([]);

onMounted(async () => {
  try {
    const { data } = await axios.get('http://127.0.0.1:8000/api/volunteering');
    console.log('Response data:', data);
    items.value = data; 
  } catch (error) {
    console.error('Error fetching data:', error);
  }
});
</script>

<template>
  <div class="flex justify-center mt-10 text-3xl">
    <b>Волонтёрство</b>
  </div>
  <div class="mt-5 p-10 grid grid-cols-1 gap-10">
    <CardVol
      v-for="item in items"
      :key="item.id"
      :id="item.id"
      :name="item.name"
      :img_path="item.img_path"
      :description="item.description"
    />
  </div>
</template>