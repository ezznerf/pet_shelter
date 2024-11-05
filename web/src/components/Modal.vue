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
    },
    petInfo: {
      type: Object,
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

<style scoped>
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
  display: flex;
  padding: 20px;
  width: 700px;
  height: 400px;
  overflow: hidden;
}

.modal-content img {
  width: 40%;
  height: 100%;
}

.bottom-button {
  padding: 10px 30px;
  border: 2px solid black;
  border-radius: 10px;
  background-color: white;
}

</style>

<template>
  <div v-if="isVisible" class="modal-overlay" @click="close">
    <div class="modal-content rounded-3xl flex" @click.stop>
      <img :src="image" alt="Modal Image" class="rounded-3xl" style="flex-shrink: 0" />
      <div class="text-left mt-5 ml-5">
        <b>{{ petInfo.breed }}: {{ petInfo.name }}</b>  
        <p>Возраст: {{ petInfo.age }}</p>
        <p>Пол: {{ petInfo.pol }}</p>
        <p>Описание: {{ petInfo.description }}</p>
        <p>Номер телефона: {{ petInfo.phone }}</p>
        <div class="mt-10 ml-28 hover:-translate-y-1 transition">
          <button class="bottom-button">Приют</button>
        </div>
      </div>
    </div>
  </div>
</template>