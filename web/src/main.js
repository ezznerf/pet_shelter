import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'

import { createRouter, createWebHistory } from 'vue-router'
import Home from './components/Home.vue'
import CardShelter from './components/CardShelter.vue'
import ShelterInfo from './components/ShelterInfo.vue'

const routes = [
  { path: '/one', component: Home },
  { path: '/two', component: CardShelter },
  { path: '/free', component: ShelterInfo }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

const app = createApp(App)
app.use(router)
app.mount('#app')
