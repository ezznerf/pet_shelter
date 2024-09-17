<template>
  <header class="flex justify-between border-b border-slate-300 px-5 pt-3">
    <router-link to="/two">
      <div class="flex items-center text-xl gap-64">
        <div
          class="flex items-center cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition"
        >
          <img src="/Image/logo.png" alt="Logo" class="w-28" />
        </div>
      </div>
    </router-link>

    <ul class="flex items-center text-xl gap-64">
      <li
        class="flex items-center cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition"
      >
        <b>Волонтерство</b>
      </li>

      <li
        class="flex items-center cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition"
      >
        <b>Список приютов</b>
      </li>

      <li
        class="flex items-center cursor-pointer hover:text-sky-700 hover:-translate-y-1 transition"
      >
        <b>Забрать животное</b>
      </li>

      <li
        class="flex items-center cursor-pointer gap-5 hover:text-sky-700 hover:-translate-y-1 transition"
      >
        <img src="/Image/user.svg" alt="User" />
        <b> Личный кабинет</b>
      </li>
    </ul>
  </header>
</template>
