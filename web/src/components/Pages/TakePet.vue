<script setup>
import { ref } from 'vue';
import Modal from '../Modal.vue';

defineProps({
  id: Number,
  name: String,
  age: Number,
  gender: String,
  description: String,
  breed: String,
  path: String,
  phone_number: String,
  shelterId: Number
})

const isModalVisible = ref(false);
const selectedPetInfo = ref({});
const selectedImage = ref('');

const openModal = (pet) => {
  selectedPetInfo.value = {
    breed: pet.breed,
    name: pet.name,
    age: pet.age,
    gender: pet.gender,
    description: pet.description,
    phone_number: pet.phone_number,
    shelterId: pet.shelterId 
  };
  selectedImage.value = pet.path;
  isModalVisible.value = true;
};

const closeModal = () => {
  isModalVisible.value = false;
};
</script>

<template>
  <div>
    <div
      class="flex items-start border border-slate-100 rounded-3xl p-5 cursor-pointer hover:-translate-y-2 hover:shadow-xl transition card-background"
      @click="openModal({ breed, name, age, gender, description, path, phone_number, shelterId })"
    >
      <img :src="path" alt="foto" class="w-48 h-48 object-cover mr-8 rounded-3xl" />
      <div class="flex flex-col">
        <p class="text-l">{{ breed }}: {{ name }}</p>
        <p class="text-l">Возраст: {{ age }}</p>
        <p class="text-l">Пол: {{ gender }}</p>
        <p class="text-l">Описание: {{ description }}</p>
      </div>
    </div>
    <Modal
      v-if="isModalVisible"
      :isVisible="isModalVisible"
      :image="selectedImage"
      :petInfo="selectedPetInfo"
      @close="closeModal"
    />
  </div>
</template>