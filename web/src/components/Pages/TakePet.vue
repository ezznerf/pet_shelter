<script setup>
defineProps({
  id: Number,
  name: String,
  age: Number,
  pol: String,
  description: String,
  breed: String,
  imgUrl: String
})
import { ref } from 'vue';
import Modal from '../Modal.vue'; // Подключаем компонент модального окна

const isModalVisible = ref(false);
const selectedPetInfo = ref({});
const selectedImage = ref('');

const openModal = (pet) => {
  selectedPetInfo.value = {
    breed: pet.breed,
    name: pet.name,
    age: pet.age,
    pol: pet.pol,
    description: pet.description
    
  };
  selectedImage.value = pet.imgUrl;
  isModalVisible.value = true;
};

const closeModal = () => {
  isModalVisible.value = false;
};
</script>

<style scoped>
.card-background {
  background-color: rgba(255, 255, 255, 0.4);
  color: black; 
}
</style>

<template>
  <div>
  <div
    class="flex items-start border border-slate-100 rounded-3xl p-5 cursor-pointer hover:-translate-y-2 hover:shadow-xl transition columns-2 transition card-background"
    @click="openModal({ breed, name, age, pol,description, imgUrl })"
  >
    <img :src="imgUrl" alt="foto" class="w-48 h-48 object-cover mr-8 rounded-3xl" style="flex-shrink: 0" />
    <div class="flex flex-col">
      <p class="text-l">{{ breed }} {{ name }}</p>
      <p class="text-l">Возраст: {{ age }}</p>
      <p class="text-l">Пол: {{ pol }}</p>
      <p class="text-l">Описание: {{ description }}</p>
    </div>
  </div>

  <Modal :isVisible="isModalVisible" :image="selectedImage" :petInfo="selectedPetInfo" @close="closeModal" />
</div>
</template>