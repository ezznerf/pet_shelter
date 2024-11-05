<script setup>
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import axios from 'axios'

const route = useRoute()
const shelter = ref(null)

onMounted(async () => {
  const shelterId = route.params.id
  try {
    const { data } = await axios.get(`http://127.0.0.1:8000/api/shelters`)
    shelter.value = data.find(s => s.id === Number(shelterId))
    console.log(shelter.value); 
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
  <div class="text-center">
    <div v-if="shelter">
      <h1 class="text-3xl mt-6">{{ shelter.name }}</h1>
      
      <div class="mx-8 mt-6 card-background border border-slate-100">
        <p class="m-4 text-2xl" style="text-indent: 1.5rem">{{ shelter.description }}</p>
      </div>

      <div class="flex justify-around flex-wrap">
        <div class="flex-1 m-8 card-background border border-slate-100">
          <p class="m-4 text-2xl">Адрес: {{ shelter.location }}</p>
          <div v-if="shelter.needs && shelter.needs.length > 0">
            <ul class="ml-6">
              <li v-for="need in shelter.needs" :key="need.id" class="text-2xl mb-2">
                <p class="m-4 text-2xl">Потребности: {{ need.count }} {{ need.brand }}</p>
                
              </li>
            </ul>
          </div>
          <div v-else>
            <p class="m-4 text-xl">Нет потребностей.</p>
          </div>
        </div>

        <div class="flex-1 m-8 card-background border border-slate-50">
          <p class="m-4 text-2xl">Телефон: {{ shelter.phone_number }}</p>
          <p class="m-4 text-2xl">Email: {{ shelter.email }}</p>
        </div>
      </div>
    </div>
  </div>
</template>