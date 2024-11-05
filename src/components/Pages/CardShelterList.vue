<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios';
import CardShelter from '../../CardShelter.vue';

const items = ref([]);

onMounted(async () => {
  try {
    const { data } = await axios.get('http://127.0.0.1:8000/api/shelters');
    items.value = data;
    console.log('Response data:', data);
  } catch (err) {
    console.log(err);
  }
});
</script>

<template>
  <div class="p-10 grid-cols-1 gap-10 grid gap-4">
    <CardShelter
      v-for="item in items"
      :key="item.id"
      :id="item.id"
      :path="item.path"
      :name="item.name"
      :description="item.description"
      :location="item.location"
      :need="item.need"
      :unit="item.unit"
      :count="item.count"
      :brand="item.brand"
      :phone_number="item.phone_number" 
    />
  </div>
</template>
