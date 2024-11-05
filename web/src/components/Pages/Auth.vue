<template>
<div class="page">
    <div class="register-container rounded-3xl" :class="{ 'signup-active': isSignup, 'login-active': !isSignup }">
        <div class="flex justify-center">
            <img src="/Image/logo.png" alt="Logo" class="w-20" />
        </div>
        <div class="signup-box">
            <div class="buttons flex justify-between items-center">
                <button class="login" @click="showLogin">Вход</button>
                <button class="signup" @click="showSignup">Регистрация</button>
            </div>
            <div class="slider" :class="{ moveslider: isSignup }"></div>
            <div class="form-section">
                <transition :name="isSignup ? 'slide-fade-left' : 'slide-fade-right'" mode="out-in">
                    <div :key="isSignup" class="form-container">
                        <div v-if="isSignup">
                            <form @submit.prevent="register">
                                <div class="form-group">
                                    <label for="email">Почта</label>
                                    <input type="text" v-model="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="login">Логин</label>
                                    <input type="text" v-model="login" id="login" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input type="text" v-model="password" id="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="dop-password">Повторный пароль</label>
                                    <input type="text" v-model="doppassword" id="dop-password" required>
                                </div>
                                <div class="button-container">
                                    <button type="submit">Регистрация</button>
                                </div>
                            </form>
                        </div>
                        <div v-else>
                            <form @submit.prevent="login">
                                <div class="form-group">
                                    <label for="login">Логин</label>
                                    <input type="text" v-model="login" id="login" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input type="text" v-model="password" id="password" required>
                                </div>
                                <div class="button-container">
                                    <button type="submit">Вход</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </transition>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            login: '',
            password: '',
            doppassword: '',
            email: '',
            isSignup: false
        };
    },
    methods: {
        register() {
            if(this.login && this.password && this.doppassword && this.email) {
                console.log('Пользователь зарегистрирован:', this.login);
                this.$router.push({name: 'Home'})
            }
            else {
                alert('Пожалуйста, заполните все поля');
            }
        },
        showSignup() {
            this.isSignup = true;
        },
        showLogin() {
            this.isSignup = false;
        }
    }
}


</script>

<style scoped>
.page {
    background-image: url('@/assets/image/back_reg.png');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    overflow-y: hidden;
}

.register-container {
    max-width: 400px;
    height: 620px;
    margin: 0 auto;
    margin-top: 5%;
    padding: 20px;
    background-color: #f9f9f9;
    transition: height 0.4s ease 0.2s;
}

.login-active {
    height: 420px;
}

.signup-active {
    height: 620px;
}

.fade-enter-active, .fade-leave-active {
    transition: opacity 0.4s ease;
}
.fade-enter, .fade-leave-to {
    opacity: 0;
}

.form-group {
    margin-bottom: 15px;
    margin-top: 5%;
}

form label {
    display: block;
    margin-bottom: 5px;
    margin-left: 5%;  
}

form input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 4px solid black;
    border-radius: 20px;
}

.form-section {
    position: relative;
    overflow: hidden;
}

.slide-fade-left-enter-active,
.slide-fade-left-leave-active,
.slide-fade-right-enter-active,
.slide-fade-right-leave-active {
    transition: opacity 0.4s ease, transform 0.4s ease;
}

.slide-fade-left-enter,
.slide-fade-left-leave-to {
    opacity: 0;
    transform: translateX(20px); 
}

.slide-fade-right-enter,
.slide-fade-right-leave-to {
    opacity: 0;
    transform: translateX(-20px); 
}

.button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    
}   



.buttons {
    display: flex; 
    width: 100%; 
}

.login, .signup {
    width: 120px;
    margin: 0 20px; 
}


.slider {
    position: relative;
    bottom: -10px;
    left: 0;
    height: 3px;
    background-color: black;
    width: 50%;
    transition: left 0.3s ease; 
}

.button-container button {
  background-color: white;
  width: 200px;
  padding: 8px;
  border: 4px solid black;
  border-radius: 20px;
  cursor: pointer;
  text-align: center;
  transition: background-color 0.3s ease;
}
.button-container button:hover {
    background-color: #88d1a5;
}

.button-container button:active{
    background-color: #72af8a; 
}

.moveslider {
    left: 50%;
}


</style>