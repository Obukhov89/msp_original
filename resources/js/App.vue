<template>
    <Header v-if="showHeader"/>
    <Header768 v-if="showHeader768"/>
    <div class="container blocks">
        <LBlock v-if="showLBlock" />

        <div class="router-view">
            <router-view/>
        </div>
        <div v-if="newsVisible" class="news">
            <Block/>
        </div>

        <Block768 v-if="showBlock768" />


        <RBlock v-if="showRBlock"/>

    </div>
    <div v-if="modalRegistration">
        <ModalRegistration/>
    </div>
    <div v-if="errorReg">
        <ErrorLogin/>
    </div>
</template>

<script>
import Header from "./components/Header.vue";
import Header768 from "./components/Header768.vue";
import LBlock from "./components/LBlock.vue"
import Block from "./components/Block.vue";
import CitySelect from "./components/CitySelect.vue";
import  {mapState, mapActions, mapGetters} from "vuex/dist/vuex.mjs";
import ModalRegistration from "./components/Modals/ModalRegistration.vue";
import ErrorLogin from "./components/Modals/ErrorLogin.vue";
import RBlock from './components/RBlock.vue';
import Block768 from './components/Block768.vue';


export default {
    name: "App",
    components: {ErrorLogin, ModalRegistration, CitySelect, Block, Header, Header768, LBlock, RBlock, Block768},

    data(){
        return{
            newsVisible: true,
            showHeader768:false,
            showBlock768:false,
        }

    },
    created() {
        window.addEventListener('resize', this.onResize);
        this.onResize();
    },

    computed:{
        ...mapState('auth', ['state'], 'displayingElements', ['state'], 'composition', ['state']),
        ...mapGetters('auth', ['isAdmin']),

        visibleNews(){
            return this.$store.state.displayingElements.blockNews
        },

        modalRegistration(){
            return this.$store.getters['displayingElements/modalRegistration']
        },

        errorReg(){
            return this.$store.getters['displayingElements/errorReg']
        }

    },
    watch:{
        state: function () {
            this.isModalVisible = this.$store.state.modalRegistration
        },

        visibleNews: function (){
            this.newsVisible = this.$store.state.displayingElements.blockNews
        },

    },
    methods: {
        onResize() {
        this.showHeader = window.outerWidth>1050;
        this.showHeader768 = window.outerWidth<=1050;
        this.showBlock768 = window.outerWidth<=1050;
        this.showLBlock = window.outerWidth>1050;
        this.showRBlock = window.outerWidth>1050;
        this.newsVisible =window.outerWidth>1050;
    },
        ...mapActions('auth', ['login', 'adminEnter',],
            'composition', ['counterBooks', 'allBooks'],
            'contest', ['addAllContests']),

        showModal(){
            this.$store.dispatch('showModalRegistration', true)
            this.isModalVisible = this.$store.state.modalRegistration
        },

        getContests(){
            axios.get('/getAllContests').then((response) => {
                this.$store.dispatch('contest/addAllContests', response.data)
            })
        },

        reloadAuth(){
            let payload = {
                idAuthor: sessionStorage.getItem("idUser"),
                authorName: sessionStorage.getItem("authorName"),
                login: sessionStorage.getItem("login"),
                oldId: sessionStorage.getItem("oldId"),
                idRole: Number(sessionStorage.getItem("idRole"))
            };

            let booksPayload = {
                countBooks:  Number(sessionStorage.getItem("countBooks")),
                book: JSON.parse(sessionStorage.getItem("books"))
            }

            this.$store.dispatch('auth/login', payload)
            this.$store.dispatch('composition/allBooks', booksPayload)

            let isAdmin = sessionStorage.getItem("isAdmin")

            if (payload.idRole === 1){
                this.$store.dispatch('auth/adminEnter', true)
            }
        },

    },



    beforeMount() {
        this.reloadAuth();
        this.getContests();
    }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body {
    margin: 0 auto;
    background-color: #c6dcf2;
    font-family: Montserrat, sans-serif;
    max-width: 1600px;

}

.container {
    margin: 0 auto;
    max-width: 1400px;
    /* border: 1px solid red; */
    padding: 20px 5px;
    /* background-color: rgb(5, 134, 163); */
}

li {
    list-style: none;
}

.header__block {
    width: 180px;
    border: 2px solid white;
    background-color: #3b5e97;
    outline: solid 3px #3b5e97;

}

.header__block-title {
    border-bottom: 2px solid white;
    margin: 1px 1px 10px 1px;
    text-align: center;
    color: white;
    font-size: 12px;
    padding: 5px;
    /* letter-spacing: 1px; */
    font-weight: 600;
    /* font-family: monospace; */
    /*font-family: monospace;*/
}

.header-list {
    margin: 1px;
    text-align: center;
    color: white;
    font-size: 12px;
    padding: 5px 0;
    /*font-family: monospace;*/
    cursor: pointer;
}

.header-list:not(:last-child) {
    border-bottom: 2px solid white;
}

.header__title {
    border: 1px solid #3b5e97;
    background-color: #3b5e97;
    /* text-align: center; */
    text-transform: none;
    align-items: center;
    margin: 0 auto;
}

.header__title h1 {
    /* width: 500px; */
    text-align: center;
    /* font-family: 'Comfortaa', cursive; */
    font-family: 'Montserrat', cursive;

}

.header__group {
    display: flex;
    justify-content: space-between;

    align-items: center;
    margin: 0 auto;
}

.header__subtitle {

    text-align: center;
    letter-spacing: 1px;
}

.logo {
    /* margin-left: 100px; */
    /* margin-top: 10px; */
    width: 550px;
    /* height: 80px; */
}

.autorisation {
    padding-top: 5px;
    width: 300px;
    font-size: 12px;
}

.autorisation__title {
    margin: 0;
    background-color: #3b5e97;
}

.autorisation__form > div {
    display: flex;
    justify-content: space-between;
    width: 250px;
    margin: 10px auto;
    align-items: center;
}


.autorisation__subtitle {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left: 40px;

}

.autorisation__subtitle button {
    background-color: #3b5e97;
    color: white;
    border: 1px solid;
    padding: 5px 10px;
    border-radius: 2px;
    /* font-family: cursive; */
    /*font-family: cursive;*/
}


.account_group {
    float: right;
    margin: 40px 100px 0 0;
}

.account_group p {
    font-family: Montserrat, sans-serif;
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    color: white;
}



.adminBtn button{
    width: 200px;
    height: 30px;
    background: #ffffff;
    border: none;
    float: right;
    color: #3b5e97;
    margin-right: 3.5rem;
    margin-top: 8px;
}


h1,
h2,
h3,
h4 {
    /* text-transform: uppercase; */
    /* font-family: 'Comfortaa', cursive; */
    font-family: 'Montserrat', cursive;
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    color: white;
    margin-bottom: 1em;
    text-align: center;
}

.content {
    position: relative;
    top: -287px;
    left: 320px;
    width: 1400px;
}

.form_text {
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    line-height: 26px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: gray;
}
#navbar {
    background-color: #C6DCF2;
    margin: 0 auto;
}

#navbar ul {
    padding: 0 1px;
    list-style: none;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    margin: 10px 0 0 0;
}

#navbar ul li {
    /* border-top: solid 1px #e3e3e3; */
    padding: 3px;
    font-size: 13px;
}

#navbar ul li a {
    font-family: Montserrat, sans-serif;
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    color: white;
    text-decoration: none;
}

.blocks{
    position:relative;
    display: flex;
}

.right-blocks{
    position: absolute;
    right: 0;
    top: 0;
    margin: 20px 10px;
}
.right-block, .left-block{

    margin-bottom: 20px;

}

.link-block {
    width: 180px;
    border: 2px solid white;
    background-color: #C6DCF2;
    outline: solid 3px #3b5e97;
    color: #3b5e97;

}
.link-block-title {
    background-color: #3b5e97;
    margin: 1px 1px 1px 1px;
    text-align: center;
    color: white;
    font-size: 14px;
    padding: 2px;
    line-height: 1.5em;
    font-weight: 400;
}
.link-block-title--left{
    text-align: start;
    letter-spacing: -0.2px;
    font-size: 12px;
}
.link-block-title p{
    /* height: 30px; */
    padding: 10px 2px;
}

.link-block-subtitle {
    background-color: #C6DCF2;
    /* border-bottom: 1px solid white; */
    margin: 1px 1px 1px 1px;
    text-align: left;
    color: #3b5e97;
    font-size: 12px;
    padding: 2px;
    line-height: 1.5em;
    /* font-weight: 400; */
}

.link-block-list {
    margin: 1px;
    text-align: start;
    color: #3b5e97;
    font-size: 12px;
    padding: 5px 2px;
    /*font-family: monospace;*/
    cursor: pointer;
}

.link-block-title:not(:last-child) {
    border-bottom: 2px solid white;
}
/* @media (max-width:1400px) {

.container{
    width: 1000px;
    padding: 20px 0;
    border: 2px solid yellow;
}

body{
    width: 1025px;
}
} */

/* @media (max-width:1100px) {

.container{
    width: 700px;
    padding: 20px 0;
    border: 2px solid yellow;
}

body{
    width: 1025px;
}

} */

/* @media (max-width:1050px) {

    .container{
        width: 700px;
        padding: 20px 0;
    }

    body{
        width: 900px;
    }

} */
@media (max-width: 760px){
    body{
        max-width: 600px;
    }
    .container{
        width: 600px;
    }
    .blocks{
       width: 500px;
    }
}

@media (max-width: 450px) {
    body{
        width: 400px;
    }
    .container{
        width: 300px;
    }

}
@media (max-width: 370px) {
    body{
        width: 100%;
    }
    .container{
        width: 100%;
    }

}






</style>
