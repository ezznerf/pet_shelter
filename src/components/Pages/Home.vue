<script setup>
import Carousel from '@/components/Carousel.vue';
import { ref, onMounted } from 'vue';
import axios from 'axios';

const items = ref([]);
const shelters = ref([]);

onMounted(async () => {
  try {
    const petsResponse = await axios.get('http://127.0.0.1:8000/api/pets');
    items.value = petsResponse.data;

    const sheltersResponse = await axios.get('http://127.0.0.1:8000/api/shelters');
    shelters.value = sheltersResponse.data;

    const shelterMap = Object.fromEntries(
      shelters.value.map(shelter => [shelter.id, shelter.phone_number])
    );

    items.value = items.value.map(item => ({
      ...item,
      phone_number: shelterMap[item.shelter_id],
      path: item.photos?.[0]?.path || '' 
    }));
  } catch (err) {
    console.error(err);
    alert('Ошибка загрузки данных. Пожалуйста, попробуйте позже.');
  }
});
</script>

<style scoped>
.info {
  padding: 5%;
  padding-left: 10%;
  padding-right: 10%;
}

.medal {
  margin-left: 20%;
  margin-top: 13%;
}
</style>

<template>
  <div class="page">
    <div class="medal relative ">
      <img src="/Image/medal.png" alt="Achievement" class="w-60 ">
      <p class="border-8 border-slate-950 border-slate-500 rounded-3xl p-4 w-40 bg-white ml-10 mt-5 text-center shadow-2xl">0/40</p>
    </div>

    <div class="mt-40">
      <Carousel :items="items" />
    </div>
  
    <div class="info flex items-center justify-between">
      <div class="border-4 border-slate-950 border-slate-500 rounded-3xl p-8 w-64 bg-white text-center shadow-2xl">
        <b>3541</b>
        <p>Сейчас в приютах</p>
      </div>
      <div class="border-4 border-slate-950 border-slate-500 rounded-3xl p-8 w-64 bg-white text-center shadow-2xl">
        <b>964</b>
        <p>Нашли свой дом</p>
      </div>
      <div class="border-4 border-slate-950 border-slate-500 rounded-3xl p-8 w-64 bg-white text-center shadow-2xl">
        <b>649,156</b>
        <p>Помогли приютам</p>
      </div>
    </div>
  </div>
</template>
