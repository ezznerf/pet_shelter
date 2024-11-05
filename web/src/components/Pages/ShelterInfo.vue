<script setup>
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import axios from 'axios'

const route = useRoute()
const shelter = ref(null)

onMounted(async () => {
  const shelterId = route.params.id
  try {
    const { data } = await axios.get(`https://3d7f9dd34af77338.mokky.dev/item/${shelterId}`)
    shelter.value = data
  } catch (error) {
    console.error(error)
  }
})
</script>

<style scoped>
p {
  display: block;
  overflow: visible;
  text-overflow: unset;
  white-space: normal;
}
.card-background {
  background-color: rgba(255, 255, 255, 0.4);
  color: black; 
  padding: 1rem;
  border-radius: 1.5rem; 
}
</style>

<template>
  <div class="text-center "> 
    <div v-if="shelter">
      <p class="text-3xl mt-6">{{ shelter.name }}</p>
      <img
        :src="shelter.imgUrl"
        alt="Shelter Image"
        class="w-96 h-96 object-cover mx-auto mt-8 mb-5 flex rounded-3xl"
      />
      
      <div class="mx-8 mt-6 card-background border border-slate-100">
        <p class="m-4 text-2xl" style="text-indent: 1.5rem">{{ shelter.description }}</p>
      </div>

      <div class="flex justify-around flex-wrap">
        <div class="flex-1 m-8 card-background border border-slate-100">
          <p class="m-4 text-2xl">Приют находится по адресу: {{ shelter.location }}</p>
          <p class="m-4 text-2xl">Требуется: {{ shelter.need }} {{ shelter.brand }} {{ shelter.count }} {{ shelter.unit }}</p>
        </div>

        <div class="flex-1 m-8 card-background border border-slate-50">
          <p class="m-4 text-2xl">Номер телефона: +{{ shelter.phone_number }}</p>
          <p class="m-4 text-2xl">Эллектронная почта :</p>
        </div>
      </div>
    </div>
  </div>
</template>