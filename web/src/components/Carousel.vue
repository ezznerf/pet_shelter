<script>
import { defineComponent } from 'vue'
import { Carousel, Navigation, Slide } from 'vue3-carousel'
import Popup from './Popup.vue'
import 'vue3-carousel/dist/carousel.css'

export default defineComponent({
  name: 'WrapAround',
  components: {
    Carousel,
    Slide,
    Navigation,
    Popup
  },
  props: {
    items: {
      type: Array,
      required: true
    }
  },
  data() {
    return {
      isModalVisible: false,
      selectedImage: '',
      selectedPetInfo: {}
    }
  },
  methods: {
    openModal(item) {
      this.selectedImage = item.path;
      this.selectedPetInfo = item; 
      this.isModalVisible = true;
    },
    closeModal() {
      this.isModalVisible = false;
      this.selectedImage = '';
      this.selectedPetInfo = {};
    }
  }
})
</script>

<template>
  <div>
    <div class="flex flex-col">
      <b class="text-center text-4xl py-4">Нужна твоя помощь</b>
    </div>
    <Carousel :items-to-show="3" 
      :wrap-around="true"
      :snap-align="'center'" 
      :transition="400" 
      :mouse-drag="true"  
      class="container">
        <Slide v-for="item in items" :key="item.id">
          <div class="carousel__item" @click="openModal(item)">
            <img :src="item.path" alt="Image" class="hover:-translate-y-2"/>
          </div>
        </Slide>
        <template #addons>
          <Navigation />
        </template>
    </Carousel>

    <Popup :isVisible="isModalVisible" :image="selectedImage" :petInfo="selectedPetInfo" @close="closeModal" />
  </div>
</template>

<style scoped>
.container {
  position: relative;
  margin: auto;
  max-width: 100%;
}

.carousel__item {
  height: 350px;
  width: 350px;
  color: black;
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel__item img {
  height: 80%;
  width: 80%;
  border-radius: 30px;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
  border: 4px solid rgba(255, 255, 255, 0.5);
  cursor: pointer;
}

.carousel__slide {  
  padding: 0 15px;
  overflow: visible;
}

.carousel__prev {
  box-sizing: content-box;
  left: 2%;
}

.carousel__next {
  box-sizing: content-box;
  right: 2%;
}
</style>