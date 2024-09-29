<script setup>
import { onMounted, ref } from 'vue'
import axios from 'axios'
import CardShelter from '../../CardShelter.vue'

const items = ref([]) // Создание реактивного свойства items

onMounted(async () => {
  try {
    const { data } = await axios.get('https://3d7f9dd34af77338.mokky.dev/item')
    console.log('Response data:', data)
    items.value = data
  } catch (err) {
    console.log(err)
  }
})
</script>

<template>
  <div class="p-10 grid-cols-1 gap-10 grid gap-4">
    <CardShelter
      v-for="item in items"
      :key="item.id"
      :id="item.id"
      :imgUrl="item.imgUrl"
      :title="item.title"
      :text="item.text"
    />
  </div>
</template>
