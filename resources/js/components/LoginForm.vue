<template>
    <form method="post" @submit.prevent="loginFunc" class="autorisation">
        <h3 class="autorisation__title">Вход для авторов</h3>
        <div class="autorisation__form">
            <div>Логин
                <input type="text" placeholder="" name="login" v-model="login">
            </div>
            <div>Пароль
                <input type="password" placeholder="" name="password" v-model="password">
            </div>
        </div>
        <div class="autorisation__subtitle">
            <button class="autorisation__btn">Вход</button>
            <input type="checkbox"> Запомнить меня
        </div>
        <p style="cursor:pointer;" @click="showModal">Регистрация на портале</p>
        <p style="cursor:pointer;" href="">Забыли пароль?</p>
    </form>


</template>

<script>
import {mapActions, mapState, mapGetters} from "vuex/dist/vuex.mjs";
import axios from "axios";
import router from "../router";
import ModalRegistration from "./Modals/ModalRegistration.vue";
import ErrorLogin from "./Modals/ErrorLogin.vue";
import setSession from "./helpers/addSession.js";

export default {
    name: "LoginForm",
    components: {ErrorLogin, ModalRegistration},
    data() {
        return {
            login: '',
            password: '',
        }
    },

    computed: {
        ...mapState('auth', ['state'], 'displayingElements', ['state']),

        ...mapGetters('displayingElements', ['modalRegistration']),

        isAdmin() {
            return this.$store.state.auth.isAdmin
        },

        visibleNews() {
            return this.$store.state.displayingElements.blockNews
        },
    },

    watch: {
        state: function () {
            this.isModalVisible = this.$store.state.modalRegistration
        },

        isAdmin: function () {
            this.isAdmin = this.$store.state.auth.isAdmin
        },


        visibleNews: function () {
            this.newsVisible = this.$store.state.displayingElements.blockNews
        },

    },

    methods: {
        ...mapActions(
            'auth', ["login", 'adminEnter'],
            'composition', ['counterBooks'],
            'contest', ['addAllContests'],
            'displayingElements', ['modalRegistration', '']),

        loginFunc() {

            let data = {
                login: this.login,
                password: this.password
            }
            axios.post('/login', data).then((response) => {
                console.log(response.data)
                if (response.data !== false) {
                    let payload = {
                        idAuthor: response.data.idUser,
                        authorName: response.data.nameUser,
                        login: response.data.login,
                        books: response.data.books,
                        oldId: response.data.oldId,
                        idRole: response.data.roles
                    };
                    let payloadBook = {
                        countBooks: payload.books.length,
                        book: payload.books
                    }

                    setSession(payload, payloadBook);
                    this.$store.dispatch('auth/login', payload)
                    this.$store.dispatch('composition/allBooks', payloadBook)

                    if (payload.idRole === 1) {
                        this.$store.dispatch('auth/adminEnter', true)
                        this.isAdmin = this.$store.state.auth.isAdmin
                    }

                    router.push({name: 'Profile'})
                } else {
                    this.$store.dispatch('displayingElements/modalError', true)
                }
            })
        },

        showModal() {
            console.log('ok');
            this.$store.dispatch('displayingElements/modalRegistration', true)
            this.$store.dispatch('displayingElements/hideNews', false)
        },


        pushAdmin() {
            this.$store.dispatch('hideNews')
            router.push({path: '/admin'})
        },
    }
}
</script>

<style scoped>
.registration_link :hover {
    cursor: pointer;
}
@media (max-width: 300px){
    .autorisation{
        width: 90%;
    }
}
</style>
