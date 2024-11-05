<script setup>
import { ref } from 'vue';
const activeCardId = ref(null);

defineProps({
  id: Number,
  name: String,
  imgUrl: String,
  description: String,
  
})

const toggleCard = (id) => {
  activeCardId.value = activeCardId.value === id ? null : id;
};
</script>

<style scoped>
.card-background {
  background-color: rgba(255, 255, 255, 0.4);
  color: black; 
}

.image1 {
  width: 100px;
  height: 100px;
  margin-left: 150%;
}

.image2 {
  width: 30px;
  height: 30px;
}
.text-container {
  position: absolute; 
  left: 50%; 
  transform: translateX(-50%);
  display: flex;
}

.active{
  height: 100%;
  width: 100%;
}

button {
  padding: 10px; 
  width: 300px;
  border: 2px solid black; 
  border-radius: 20px;
  background-color: rgb(215, 202, 202); 
  
}

</style>

<template>
  <div
    @click="toggleCard(id)"
    :class="[
      'flex border border-slate-100 rounded-3xl p-10 cursor-pointer hover:-translate-y-2 hover:shadow-xl transition-all duration-300 card-background',
      activeCardId === id ? 'h-96 hover:shadow-2xl' : 'h-48 hover:shadow-lg']">

    <template v-if="activeCardId === id">
      <div class="active flex flex-col items-center text-xl">
        <div class="flex space-x-2 text-2xl">
          <b>{{ name }}</b>
          <img :src="imgUrl" alt="photo" class="image2" />
        </div>
        <div class="mt-10">
          <p>{{ description }}</p>
        </div>
        <div class="mt-20 rounded-3xl hover:-translate-y-1 transition hover:shadow-2xl">
          <button>Откликнуться</button>
        </div>
      </div>
    </template>
    <template v-else>
      <div class="flex align-center justify-center items-center">
        <img :src="imgUrl" alt="photo" class="image1" />
        <div class="items-center text-container">
          <b class="text-2xl">{{ name }}</b>
        </div>
      </div>
    </template>
  </div>
</template>
