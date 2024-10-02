
<template>
  <div class="medal relative ">
    <img src="/Image/medal.png" alt="Achivement" class="w-60 ">
    <p class="border-8 border-slate-950 border-slate-500 rounded-3xl p-4 w-40 bg-white ml-10 mt-5 text-center shadow-2xl">0/40</p>
  </div>

  <div class="mt-40">
    <Carousel />

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

<div v-footer class="bg-neutral-500">
  <p class="text-center">
    Наша задача, это рааазными схэмами сделать этот великий проект
  </p>
  <p class="text-center">Величайшие: Якута Кирилл, Масык Илья, Скрипоченко Сергей, Васюнин Антон</p>
</div>
</template>

<script setup>
  import Carousel from '@/components/Carousel.vue'

  import {ref} from 'vue'
  const show = ref(false)
  const openConfirm = () => {
    show.value = true;
  }
  const closeConfirm = () => {
    show.value = false;
  }
 
</script>

<style>
.info {
 padding: 5%;
 padding-left: 10%;
 padding-right: 10%;
}

.medal {
  margin-left: 20%;
  margin-top: 13%;
  
}
.footer {
display: flex;
background-color: #444944; 
height: 50px;
width: 100%;
position: fixed;
}
</style>