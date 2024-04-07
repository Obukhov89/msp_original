<template>
    <div class="tableRequest">
        <div v-for="item in getTurnRequest" :key="item.idRequest" class="table">
            <!-- <div class="id">{{ item.idRequest }} </div> -->
            <div class="name">({{ item.idRequest }}) {{ item.name }}</div>
            <div class="role">{{ item.role }}</div>
            <div class="about">{{ item.about }}</div>
            <div class="btns">
                <button class="acceptBtn" @click="saveRequest(item.idRequest)">Принять запрос</button>
                <button class="rejectBtn" @click="rejectRequest(item.idRequest)">Отклонить запрос</button>
            </div>
        </div>



        <!-- <tr v-for="item in getTurnRequest" :key="item.idRequest">
            <td>{{ item.idRequest }}</td>
            <td>{{ item.name }}</td>
            <td>{{ item.role }}</td>
            <td>{{ item.about }}</td>
            <td>
                <button class="acceptBtn" @click="saveRequest(item.idRequest)">Принять запрос</button>
            </td>
            <td>
                <button class="rejectBtn" @click="rejectRequest(item.idRequest)">Отклонить запрос</button>
            </td>
        </tr> -->
    </div>
</template>

<script>
import axios from "axios";
import  {mapState, mapActions} from "vuex/dist/vuex.mjs";

export default {
    name: "TableRequest",

    data() {
        return ({
                arrRequest: []
            }
        )
    },

    computed:{
        ...mapState('registration', ['state']),

        getTurnRequest(){
            return this.$store.state.registration.arrRequest;
        }
    },

    methods:{
        ...mapActions('registration', ['setArrRequests', 'delRequestItem']),
        getTurn(){
            axios.get('/getTurnRequest').then((request) => {
                this.$store.dispatch('registration/setArrRequests', request.data)
            })
        },
        saveRequest(id){
            let idRequest = {'idRequest': id}
            axios.post('/saveRequest', idRequest).then((request) => {
                alert('Заявка на регистрацию принята');
                this.$store.dispatch('registration/delRequestItem', id);
            })
        },
        rejectRequest(idReject){
            let idRequest = {'idRequest': idReject};
            axios.post('/rejectRequest', idRequest).then((request) => {
                alert('Заявка на регистрацию отклонена')
                this.$store.dispatch('registration/delRequestItem', idReject)
            })
        }
    },
    beforeMount() {
        this.getTurn()
    }
}
</script>

<style scoped>
.adminpanel__text h1{
    color: #000;
}
.table{
    display: flex;
    flex-direction: row;
    align-content: flex-start;
    justify-content: space-between;
    align-items: stretch;
    gap: 15px;
}
.table div{
    border-top: solid 1px #e3e3e3;
    width: 100%;
    padding: 10px 0;
    text-align: center;
    vertical-align: middle;

}
.btns{
    display: flex;
    flex-direction: row;
}



/* .li-btn{
    background-color: #abcdf066;
    width: 100%;
    height: 40px;
    border: 1px solid white;
    font-size: 12px;
    padding: 0 5px;
    cursor: pointer;
    font-weight: 600;
    color: #3b5e97;
    border-radius: 5px;
    border-top: solid 1px #e3e3e3;
    padding: 5px;
    font-size: 13px;
    width: -webkit-fill-available;
    text-align: center;
} */

/* .tableRequest{
    width: 900px;
    padding-top: 3rem;
} */

/* .tableRequest tr{
    text-align: center;
}

.tableRequest td{
    border-bottom: 1px solid #718096;
   height: 80px;
} */

.acceptBtn{
    width: 180px;
    height: 45px;
    background: #3b5e97;
    border: none;
    color: white;
    font-size: 16px;
    border-right: 3px;
}

.rejectBtn{
    width: 180px;
    height: 45px;
    background: #9f4848;
    border: none;
    color: white;
    font-size: 16px;
    border-right: 3px;
}
@media (max-width: 1000px){

    .btns{
        display: flex;
        flex-direction: column;
    }
}
@media (max-width: 600px){
    .table{
        display: flex;
        flex-direction: column;
        margin: 10px;
        background-color : #e3e3e3 ;

    }
    .btns{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin: 0 auto;
    }

}
</style>
