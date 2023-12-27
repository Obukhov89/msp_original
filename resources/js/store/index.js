import {createStore} from "vuex/dist/vuex.mjs";
import auth from "./auth/auth.js";
import displayingElements from "./displayningElements/displayingElements.js";
import composition from "./composition/composition.js";
import registration from "./registration/registration.js";
import contest from "./contest/contest.js";
import forContest from "./forContest/forContest.js";


const store = createStore({
    state:{},
    getters:{},
    actions:{
        showModalRegistration({commit}, payload){
            commit('showModalRegistration', payload)
        },

        showModalEditComposition({commit}, payload){
            commit('showModalEditComposition', payload)
        },

        closeModalEditComposition({commit}, payload){
            commit('closeModalEditComposition', payload)
        },

        closeModalRegistration({commit}, payload){
            commit('closeModalRegistration', payload)
        },
    },
    mutations:{
        showModalRegistration(state, payload){
            state.modalRegistration = payload
        },

        closeModalRegistration(state, payload) {
            state.modalRegistration = payload
        },

        showModalEditComposition(state, payload) {
            state.modalEditComposition = payload
        },

        closeModalEditComposition(state, payload) {
            state.modalEditComposition = payload
        },
    },
    modules:{
        auth,
        displayingElements,
        composition,
        registration,
        contest,
        forContest
    },
})

export default store
