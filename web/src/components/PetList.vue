<script setup>
import { onMounted, ref, computed } from 'vue'
import axios from 'axios'
import TakePet from './Pages/TakePet.vue'

const items = ref([])
const selectedPol = ref('')
const selectedTyp = ref('')

onMounted(async () => {
  try {
    const { data } = await axios.get('https://3d7f9dd34af77338.mokky.dev/pets')
    console.log('Response data:', data)
    items.value = data
  } catch (err) {
    console.log(err)
  }
})

const filteredItems = computed(() => {
  return items.value.filter((item) => {
    const matchesPol = selectedPol.value ? item.pol === selectedPol.value : true
    const matchesTyp = selectedTyp.value
      ? selectedTyp.value === 'Кошка'
        ? ['Кошка', 'Кот'].includes(item.type)
        : item.type === selectedTyp.value
      : true
    return matchesPol && matchesTyp
  })
})
</script>

<template>
  <div class="p-6">
    <div class="flex justify-between items-center">
      <h1 class="text-3xl font-bold md-8">Эти ребята ищут себе дом</h1>

      <div class="flex items-center space-x-2">
        <div class="flex items-center">
          <label for="polFilter" class="mr-2">Пол:</label>
          <select id="polFilter" v-model="selectedPol" class="border rounded-lg p-2">
            <option value="">Все</option>
            <option value="М">М</option>
            <option value="Ж">Ж</option>
          </select>
        </div>

        <div class="flex items-center">
          <label for="typeFilter" class="mr-2">Тип:</label>
          <select id="typeFilter" v-model="selectedTyp" class="border rounded-lg p-2">
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
      :name="item.name"
      :age="item.age"
      :imgUrl="item.imgUrl"
      :text="item.text"
      :pol="item.pol"
      :type="item.type"
    />
  </div>
</template>
