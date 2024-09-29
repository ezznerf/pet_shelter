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

<template>
  <div class="text-center">
    <div v-if="shelter">
      <img
        :src="shelter.imgUrl"
        alt="Shelter Image"
        class="w-96 h-96 object-cover mx-auto mt-10 mb-5 flex cursor-pointer"
      />
      <b class="text-3xl">{{ shelter.title }}</b>
      <p class="text-2xl mx-8 border border-slate-100 rounded-3xl mt-6 p-">{{ shelter.text }}</p>
    </div>
  </div>
</template>
