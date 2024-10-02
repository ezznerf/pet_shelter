<template>
    <div v-if="isVisible" class="modal-overlay" @click="close">
      <div class="modal-content rounded-3xl" @click.stop>
        <img :src="image" alt="Modal Image" class="rounded-3xl"/>
        <div class="text-left mt-5">
            <b>Имя животного</b>
            <p>Номер приюта</p>
        </div>
        
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Modal',
    props: {
      isVisible: {
        type: Boolean,
        default: false
      },
      image: {
        type: String,
        required: true
      }
    },
    methods: {
      close() {
        this.$emit('close');
      }
    }
  }
  </script>
  
  <style>
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .modal-content {
    background: white;
    padding: 20px;
    width: 400px;
    height: 500px;
    overflow: hidden;
    text-align: center;
  }
  
  .modal-content img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
  }
  
  .close-btn {
    margin-top: auto; 
 
  }
  </style>