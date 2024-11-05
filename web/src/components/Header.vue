<script>
  export default {
    data() {
      return {
        isRotating: false,
        isSettingsOpen: false, 
        inputNikname: '',
        inputEmail: '',
        inputPassword: '',
        inputNumber: '',
      };
    },
    methods: {
      toggleRotation() {
        this.isRotating = !this.isRotating;
        this.isSettingsOpen = !this.isSettingsOpen;
      }
    }
  }
</script>

<template>
  <header class="flex items-center justify-between border-b border-slate-300 w-full px-5 py-1">
    <ul class="flex justify-between text-xl w-full items-center">
      <router-link to="/">
        <li class="flex items-center cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition">
          <img src="/Image/logo.png" alt="Logo" class="w-20" />
          <div>
            <b>PetShelter</b>
            <p>Помощь животным</p>
          </div>
        </li>
      </router-link>

      <router-link to="/Vol">
        <li class="flex cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition">
          <b>Волонтерство</b>
        </li>
      </router-link>

      <router-link to="/CardShelterList">
        <li class="flex cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition">
          <b>Список приютов</b>
        </li>
      </router-link>

      <router-link to="/PetList">
        <li class="flex cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition">
          <b>Забрать животное</b>
        </li>
      </router-link>

      <li class="flex items-center cursor-pointer relative">
        <router-link v-if="$route.path !== '/Profile'" to="/Profile">
          <img src="/Image/LK.png" alt="User" class="w-16" />
        </router-link>
        <div v-else>
          <img src="/Image/settings.png" alt="Settings" class="w-16"
               :class="{'rotate-animation': isRotating, 'reverse-rotate-animation': !isRotating}"
               @click="toggleRotation">
          
          <div v-if="isSettingsOpen" class="settings-popup text-center absolute right-0 mt-2 p-4 bg-white border border-2 border-slate-950 rounded-2xl shadow-lg">
            <b>Настройки</b>
            <div class="flex flex-col mt-4 gap-y-3 items-center">
              <div class="inputFields flex justify-center mt-2 border border-slate-950 rounded-2xl p-2 ">
                <div class="lb">Измените аватар</div> 
                <button><img src="/Image/download.png" alt="download" class="download w-7 "></button>
                
              </div>
              <div class="inputFields bg-white flex flex-col mt-2 border border-slate-950 rounded-2xl p-2 ">
                <input type="text" v-model="inputNikname" placeholder="Измените никнейм"> 
              </div>
              <div class="inputFields flex flex-col mt-2 border border-slate-950 rounded-2xl p-2">
                <input type="text" v-model="inputEmail" placeholder="Измените почту"> 
              </div>
              <div class="inputFields flex flex-col mt-2 border border-slate-950 rounded-2xl p-2">
                <input type="text" v-model="inputPassword" placeholder="Измените пароль"> 
              </div>
              <div class="inputFields flex flex-col mt-2 border border-slate-950 rounded-2xl p-2">
                <input type="text" v-model="inputNumber" placeholder="Измените номер"> 
              </div>
            </div>
            <div>
              <button class="mt-10 border border-slate-950 rounded-2xl w-48 h-10 bg-white hover:-translate-y-1 transition">Сохранить</button>
            </div>
            
            
          </div>
        </div>
      </li>
    </ul>
  </header>
</template>

<style scoped>

.download {
  margin-left: 10px;
  
}
.lb{
  color: rgba(0, 0, 0, 0.5);
}

input{
  text-align: center;
  outline: none;
}
.inputFields {
  width: 250px;
  background-color: white;
}
.settings-popup {
  width: 320px;
  height: 490px;
  z-index: 10;
  background-color: rgb(210, 229, 229);
  cursor: default;
}

@keyframes rotate {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(180deg); }
}

@keyframes reverseRotate {
  0% { transform: rotate(180deg); }
  100% { transform: rotate(0deg); }
}

.rotate-animation {
  animation: rotate 1s ease-in-out forwards;
}

.reverse-rotate-animation {
  animation: reverseRotate 1s ease-in-out forwards;
}


</style>
