<script>
export default {
  name: 'PopupAchive',
  props: {
    isVisible: {
      type: Boolean,
      default: false
    },
    achiveInfo: {
      type: Object,
      required: true
    }
  },
  methods: {
    close() {
      this.$emit('close');
    },
  }
}
</script>

<template>
  <div v-if="isVisible" class="modal-overlay" @click="close">
    <div class="modal-content" @click.stop>
      <div class="text-center ml-16 mt-7">
        <p>какой то текст</p>
      </div>
    </div>
  </div>
</template>

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
  width: 500px;
  height: 300px;
  overflow: hidden;
  border-radius: 12px;
}

.modal-content img {
  width: 50%;
  height: 100%;
  border-radius: 12px 0 0 12px;
}

.bottom-button {
  padding: 10px 20px;
  border: 2px solid black;
  border-radius: 10px;
  background-color: white;
}
</style>