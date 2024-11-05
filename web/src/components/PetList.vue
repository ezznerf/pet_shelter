<script setup>
import { onMounted, ref, computed } from 'vue';
import axios from 'axios';
import TakePet from './Pages/TakePet.vue';

const items = ref([]);
const shelters = ref([]);
const selectedGender = ref('');
const selectedBreed = ref('');

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

const filteredItems = computed(() => {
  return items.value.filter(item => {
    const matchesGender = selectedGender.value ? item.gender === selectedGender.value : true;
    const matchesBreed = selectedBreed.value
      ? selectedBreed.value === 'Кошка'
        ? ['Кошка', 'Кот'].includes(item.breed)
        : item.breed === selectedBreed.value
      : true;
    return matchesGender && matchesBreed;
  });
});
</script>

<template>
  <div>
    <div class="p-6">
    <div class="flex justify-between items-center">
      <h1 class="text-3xl font-bold md-8">Эти ребята ищут себе дом</h1>

      <div class="flex items-center space-x-2">
        <div class="flex items-center">
          <label for="polFilter" class="mr-2">Пол:</label>
          <select id="polFilter" v-model="selectedGender" class="border rounded-lg p-2">
            <option value="">Все</option>
            <option value="М">М</option>
            <option value="Ж">Ж</option>
          </select>
        </div>

        <div class="flex items-center">
          <label for="breedFilter" class="mr-2">Тип:</label>
          <select id="breedFilter" v-model="selectedBreed" class="border rounded-lg p-2">
            <option value="">Все</option>
            <option value="Кошка">Кошки</option>
            <option value="Собака">Собаки</option>
          </select>
        </div>
      </div>
    </div>
  </div>

    <div class="p-8 grid-cols-2 gap-10 grid gap-4">
      <TakePet
        v-for="item in filteredItems"
        :key="item.id"
        :id="item.id"
        :breed="item.breed"
        :name="item.name"
        :age="item.age"
        :gender="item.gender"
        :description="item.description"
        :path="item.path" 
        :phone_number="item.phone_number"
        :shelterId="item.shelter_id"
      />
    </div>
  </div>
</template>