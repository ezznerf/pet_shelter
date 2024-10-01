<template>
  <header class="flex items-center justify-between border-b border-slate-300 w-full px-5 py-1">
    <ul class="flex justify-between text-xl w-full flex items-center w-full">
      <li class="flex items-center cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition">
        <img src="/Image/logo.png" alt="Logo" class="w-16" />
      </li>

      <li class="flex cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition">
        <b>Волонтерство</b>
      </li>

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

      <router-link to="/PersonalAccount">
        <li class="flex items-center cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition">
          <img src="/Image/user.svg" alt="User" class="w-16" />
        </li>
      </router-link>
    </ul>
  </header>
</template>
