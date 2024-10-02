<template>
    <div class="register-container rounded-3xl">
        <div class="flex justify-center">
            <img src="/Image/logo.png" alt="Logo" class="w-20" />
        </div>
        <div class="signup-box">
                <div class="buttons flex justify-between">
                    <button class="login" @click="showLogin">Вход</button>
                    <button class="signup" @click="showSignup">Регистрация</button>
                </div>
            <div class="slider" :class="{ moveslider: isSignup }"></div>
            <div class="form-section" :class="{ 'form-section-move': isSignup }">
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
                                <input type="text" v-model="doppassword" id="dop-password" required >
                            </div>

                            <div class="buttom-container">
                                <button type="submit">Вход</button>
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

                            <div class="buttom-container">
                                <button type="submit">Вход</button>
                            </div>
                            
                        </form>
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

<style>

.register-container {
    max-width: 400px;
    height: 620px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
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

.buttom-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    
}   

.buttom-container button {
  background-color: white;
  width: 200px;
  padding: 8px;
  border: 4px solid black;
  border-radius: 20px;
  cursor: pointer;
  text-align: center;
  transition: background-color 0.3s ease;
}
.buttom-container button:hover {
    background-color: #88d1a5;
}



</style>