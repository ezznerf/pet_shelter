import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'

import { createRouter, createWebHistory } from 'vue-router'
import Home from './components/Pages/Home.vue'
import CardShelterList from './components/Pages/CardShelterList.vue' // Импортируем CardShelterList
import ShelterInfo from './components/Pages/ShelterInfo.vue'
import TakePet from './components/Pages/TakePet.vue'
import PetList from './components/PetList.vue'

const routes = [
  { path: '/one', component: Home },
  { path: '/CardShelterList', component: CardShelterList },
  { path: '/Takepet', component: TakePet },
  { path: '/PetList', component: PetList },
  { path: '/ShelterInfo/:id', name: 'ShelterInfo', component: ShelterInfo, props: true }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

const app = createApp(App)
app.use(router)
app.mount('#app')
