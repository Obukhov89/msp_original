export default {
    setArrRequests(state, payload){
        state.arrRequest = payload
    },
    delRequestItem(state, payload){
        state.arrRequest = state.arrRequest.filter(item => item.idRequest !== payload)
    }
}
