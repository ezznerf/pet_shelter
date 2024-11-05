<template>
  <div class="main">
    <Header v-if="!isAuthPage" />
    <router-view></router-view>
  </div>
</template>

<script>
import Header from './components/Header.vue'
export default {
  components: {
    Header
  },
  computed: {
    isAuthPage() {
      return this.$route.name === 'Authorization';
    }
  }
}
</script>

<style scoped>
.main {
  height: 100%;
}
div
{
  display: flex;
  flex-direction: column;
}
   
</style>
