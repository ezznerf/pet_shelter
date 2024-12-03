<script>
    import {ref} from 'vue'
    import PopupAchive from '@/components/PopupAchive.vue'
    export default {
    components: {
        PopupAchive
    },
    data() {
        return {
            isModalVisible: false,
        }
    },
    methods: {
        openModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        }
    }
}
</script>

<template>
    <div class="flex flex-col items-center p-10 ">
        <img src="/Image/LK.png" alt="" class="w-52">
        <b class="mt-10 text-3xl">Nickname</b>
        <div>
            <b class="b1 block mt-10 border-4 border-slate-950 border-slate-500 rounded-2xl p-3 w-40 text-center shadow-2xl">10000.00 Р</b>
        </div>

        <div class="achive mt-20 border-4 border-slate-950 border-slate-500 rounded-2xl bg-white shadow-2xl overflow-y-auto">
            <div class="top h-8 rounded-xl text-center ">
                <b>Достижения</b>
            </div>
            <div class="flex justify-items-center grid grid-cols-4 mt-5 " @click="openModal()">
                <img src="/Medals/donation bronze.png" alt="" class="w-48 ">
                <img src="/Medals/donation silver.png" alt="" class="w-48">
                <img src="/Medals/donation gold.png" alt="" class="w-48">
                <img src="/Medals/donation extra.png" alt="" class="w-48">
                <img src="/Medals/walk bronze.png" alt="" class="w-48">
                <img src="/Medals/walk silver.png" alt="" class="w-48">
                <img src="/Medals/walk gold.png" alt="" class="w-48">
                <img src="/Medals/walk extra.png" alt="" class="w-48">
                <img src="/Medals/pet food bronze.png" alt="" class="w-48">
                <img src="/Medals/pet food silver.png" alt="" class="w-48">
                <img src="/Medals/pet food gold.png" alt="" class="w-48">
                <img src="/Medals/pet food extra.png" alt="" class="w-48">
                <img src="/Medals/PR bronze.png" alt="" class="w-48">
                <img src="/Medals/PR silver.png" alt="" class="w-48">
                <img src="/Medals/PR gold.png" alt="" class="w-48">
                <img src="/Medals/traveler.png" alt="" class="w-48">
                <img src="/Medals/driver bronze.png" alt="" class="w-48">
                <img src="/Medals/driver silver.png" alt="" class="w-48">
                <img src="/Medals/driver gold.png" alt="" class="w-48">
                <img src="/Medals/first pet.png" alt="" class="w-48">
                <img src="/Medals/cat medal.png" alt="" class="w-48">
                <img src="/Medals/dog medal.png" alt="" class="w-48">
                <img src="/Medals/best friends.png" alt="" class="w-48">
                <img src="/Medals/cat and dog.png" alt="" class="w-48">
                <img src="/Medals/300$.png" alt="" class="w-48">
            </div>
            <PopupAchive :isVisible="isModalVisible" @close="closeModal" />
            
        </div>
        
        <div class="forma border-2 rounded-2xl border-slate-950">
            <div class="flex flex-col mt-10 space-y-8 items-center">
                <input type="text" placeholder="ФИО" class="border-2 rounded-xl border-slate-950 w-5/6 h-10 text-center shadow-lg">
                <input type="text" placeholder="Номер телефона" class="border-2 rounded-xl border-slate-950 w-5/6 h-10 text-center shadow-lg">
                <input type="text" placeholder="Возраст" class="border-2 rounded-xl border-slate-950 w-5/6 h-10 text-center shadow-lg">
                <p class="mt-5 text-center">У вас есть автомобиль?</p>
                    <div class="flex justify-center gap-10">
                        <div class="yes">
                            <input type="radio" id="one" value="One" name="lol" >
                            <label for="one">Да</label>
                        </div>

                        <div class="no">
                            <input type="radio" id="two" value="Two" name="lol" >
                            <label for="two">Нет</label>
                        </div>
                        
                    </div>
                    <input type="text" class="mini-forma w-5/6 border-2 rounded-2xl border-slate-950 bg-white text-center shadow-lg" placeholder="Информация о себе(не обязательно)">
                    
            </div>

            <div class="flex space-x-48 mt-10 justify-center">
                <button class="border-2 rounded-xl border-slate-950 bg-white w-48 h-8 hover:-translate-y-1 transition shadow-lg">
                    Отменить
                </button>
                <button class="border-2 rounded-xl border-slate-950 bg-white w-48 h-8 hover:-translate-y-1 transition shadow-lg">
                    Сохранить
                </button>    
            </div>

        </div>

        <div class="text-center mt-10 space-y-8">
            <p class="text-xl">Волонтёрская деятельность</p>
            <div class="vol flex justify-between items-center border-4 border-slate-950 rounded-3xl bg-white px-20">
                <img src="/Vol/ambulance.png" alt="photo" class="image1" />
                    <div class="items-center text-container ">
                        <b class="text-2xl">Перевозка</b>
                    </div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none  rounded-full peer dark:bg-[##aab4ac] peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#c2e0c7]">

                    </div>
                        
                    </label>
            </div>
            <div class="vol flex justify-between items-center border-4 border-slate-950 rounded-3xl bg-white px-20">
                <img src="/Vol/dog-walking.png" alt="photo" class="image1" />
                    <div class="items-center text-container">
                        <b class="text-2xl">Прогулка с животным</b>
                    </div>
                    <label class="inline-flex items-center cursor-pointer switcher">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-[##aab4ac] peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#c2e0c7]">

                        </div>
                        
                    </label>
            </div>
        </div>

    </div>
</template>

<style>

.text-container {
  position: absolute; 
  left: 50%; 
  transform: translateX(-50%);
  display: flex;
}

.vol {
    height: 100px;
    width: 60rem;
}

.image1 {
  width: 50px;
  height: 50px;
}

.mini-forma {
    height: 150px;
}

.forma {
    margin-top: 50px;
    height: 620px;
    width: 800px;
    background-color: rgb(210, 229, 229);
}

.b1 {
    background-color:rgb(194, 224, 199);
    
}
.achive {
    height: 30rem;
    width: 60rem;
}

.top {
    background-color:rgb(194, 224, 199);
    border-bottom: 4px solid black;
}


</style>

