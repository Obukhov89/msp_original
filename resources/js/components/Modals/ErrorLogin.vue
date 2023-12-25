<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div class="modalError"
                 role="dialog"
                 aria-labelledby="modalTitle"
                 aria-describedby="modalDescription">
                <header
                    class="modal-header"
                    id="modalTitle">
                    <slot name="header">
                        <p>Ошибка входа</p>
                        <button type="button" class="btn-close" @click="closeErr" aria-label="Close modal">x
                        </button>
                    </slot>
                </header>
                <p class="error_text"> Пользователь не зарегистрирован в системе.<br> Хотите зарегестрироваться?</p>
                <div class="errBtnCont">
                    <button id="btn" @click="goToReg" class="btnErr">Регистрация</button>
                </div>

            </div>
        </div>
    </transition>
</template>

<script>
import {mapState, mapActions} from "vuex/dist/vuex.mjs";
import axios from "axios";
import ExConInpts from "../asyncComponents/ExConInpts.vue";
import NewConInpts from "../asyncComponents/NewConInpts.vue";
import {defineAsyncComponent} from "vue";

export default {
    name: "ErrorLogin",

    methods: {
        ...mapActions('displayingElements', ['modalError']),

        closeErr(){
            this.$store.dispatch('displayingElements/modalError', false)
        },

        goToReg(){
            this.$store.dispatch('displayingElements/modalError', false);
            this.$store.dispatch('displayingElements/modalRegistration', true)
        }
    }

}
</script>

<style>
.modal-backdrop {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;

}

.error_text{
    text-align: center;
}

.modalError {
    border-radius: 10px 10px 0 0;
    margin-top: 50px;
    width: 500px;
    height: 250px;
    background: #FFFFFF;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
}

.modal-header,
.modal-footer {
    padding: 15px;
    display: flex;
}

.modal-header {
    background: #3b5e97;
    height: 25px;
    border-bottom: 1px solid #eeeeee;
    color: #eeeeee;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.btn-close {
    border: none;
    font-size: 20px;
    padding: 20px;
    cursor: pointer;
    font-weight: bold;
    color: #eeeeee;
    background: transparent;
}

.errBtnCont{
    margin: 0 auto;
}

.btnErr {
    align-items: center;
    margin-top: 2rem;
    background-color: #3b5e97;
    border: none;
    border-radius: 5px;
    width: 200px;
    font-size: 16px;
    height: 45px;
    color: white;
}

</style>
