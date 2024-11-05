import './assets/main.css';

import { createApp } from 'vue';
import App from './App.vue';
import { createRouter, createWebHistory } from 'vue-router';
import Home from './components/Pages/Home.vue';
import Authorization from './components/Pages/Auth.vue';
import CardShelterList from './components/Pages/CardShelterList.vue';
import ShelterInfo from './components/Pages/ShelterInfo.vue';
import TakePet from './components/Pages/TakePet.vue';
import PetList from './components/PetList.vue';

const routes = [
  { path: '/Auth', name: 'Authorization', component: Authorization },
  { path: '/', name: 'Home', component: Home },
  { path: '/CardShelterList', name: 'CardShelterList', component: CardShelterList },
  { path: '/Takepet', name: 'TakePet', component: TakePet },
  { path: '/PetList', name: 'PetList', component: PetList },
  { path: '/ShelterInfo/:id', name: 'ShelterInfo', component: ShelterInfo, props: true }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

const app = createApp(App);
app.use(router);
app.mount('#app');
