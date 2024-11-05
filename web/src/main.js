import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'

import { createRouter, createWebHistory } from 'vue-router'
import Home from './components/Pages/Home.vue'
import Authorization from './components/Pages/Auth.vue'
import CardShelterList from './components/Pages/CardShelterList.vue'
import ShelterInfo from './components/Pages/ShelterInfo.vue'
import TakePet from './components/Pages/TakePet.vue'
import PetList from './components/PetList.vue'
import Volunteering from './components/Pages/Volunteering.vue'
import Profile from './components/Pages/Profile.vue'

const routes = [
  { path: '/Auth', name:'Authorization', component: Authorization },
  { path: '/', component: Home },
  { path: '/CardShelterList', component: CardShelterList },
  { path: '/Takepet', component: TakePet },
  { path: '/PetList', component: PetList },
  { path: '/ShelterInfo/:id', name: 'ShelterInfo', component: ShelterInfo, props: true },
  { path: '/Vol', component: Volunteering },
  { path: '/Profile', component: Profile }
  
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

const app = createApp(App)
app.use(router)
app.mount('#app')
