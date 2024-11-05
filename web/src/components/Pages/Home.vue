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
        <p>Мы собрали</p>
      </div>
    </div> 
  </div>
  <div v-footer class="bg-neutral-500">
      <p class="text-center">
        Наша задача, это разными схемами сделать этот великий проект
      </p>
      <p class="text-center">Величайшие: Якута Кирилл, Масык Илья, Скрипоченко Сергей, Васюнин Антон</p>
    </div>
</template>

<script setup>
import Carousel from '@/components/Carousel.vue'
import { ref, onMounted } from 'vue'
import axios from 'axios'
import { useRoute } from 'vue-router';

const items = ref([]);



onMounted(async () => {
  try {
    const { data } = await axios.get('https://3d7f9dd34af77338.mokky.dev/pets');
    items.value = data;
  } catch (err) {
    console.log(err);
  }
});
</script>

<style>

.page {
  background-image: url('/Image/back3.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top;
  flex-grow: 1;
}


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