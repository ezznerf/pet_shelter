<template>
    <div class="flex flex-col">
      <b class="text-center text-4xl py-4">Нужна твоя помощь</b>
    </div>
    <Carousel :items-to-show="3" 
    :wrap-around="true"
    :snap-align="'center'" 
    :transition="400" 
    :mouse-drag="true"  
    class="container">
        <Slide v-for="slide in images" :key="slide">
        
        <div class="carousel__item" @click="openModal(slide)">
            <img :src="slide" alt="Image" class="hover:-translate-y-2 hover:shadow-2xl transition"/>
            
        </div>
        
      </Slide>
      <template #addons>
        <Navigation />
      </template>
    </Carousel>

    <Popup :isVisible="isModalVisible" :image="selectedImage" @close="closeModal" />

</template>
  

<script>
  import { defineComponent } from 'vue'
  import { Carousel, Navigation, Slide } from 'vue3-carousel'
  import Popup from './Popup.vue'
  import 'vue3-carousel/dist/carousel.css'
  import image1 from "../assets/image/img1.jpg"
  import image2 from "../assets/image/img2.jpg"
  import image3 from "../assets/image/img3.jpg"

  export default defineComponent({
    name: 'WrapAround',
    components: {
      Carousel,
      Slide,
      Navigation,
      Popup
    },
    data() {
        return {
            images: [
            image1,
            image2,
            image3,
            ],
            isModalVisible: false,
            selectedImage: ''
        }
    },
    methods: {
      openModal(image) {
        this.selectedImage = image;
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
        this.selectedImage = '';
      }
    }
  })

</script>
 
<style>

.container {
  position: relative;
  margin: auto;
  max-width: 90%;
}

.carousel__item {
  height: 80%;
  width: auto;
  max-width: 80%;
  color: black;
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel__item img{
  height: 100%;
  width: auto;
  border-radius: 30px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  border: 4px solid rgba(255, 255, 255, 0.5);
  cursor: pointer;
}

.carousel__slide {  
  padding: 0 15px;
  overflow: visible;
}

.carousel__prev {
  box-sizing: content-box;
  left: -1%;
}

.carousel__next {
  box-sizing: content-box;
  right: -1%;
}
</style>
  