
<template>
    <div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Начинка</th>
                <th scope="col">Цена</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="cheburek in cheburekList">
                <show-component :cheburek="cheburek" :ref="`show_${cheburek.id}`"></show-component>
                <edit-component :cheburek="cheburek" :ref="`edit_${cheburek.id}`"></edit-component>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import ShowComponent from "../components/ShowComponent.vue";
import EditComponent from "../components/EditComponent.vue";

export default {
    components: {EditComponent, ShowComponent},
    data() {
        return {
            cheburekList: null,
            editCheburekId:null,
            id: null,
            name: null,
            price:null
        }
    },

    mounted(){
        this.getCheburek()
    },
    methods: {
        getCheburek (){
            axios.get('http://localhost:8000/api/get')
                .then(response => this.cheburekList = response.data)
                .catch((error) => {
                    console.error(error)
                })
        },
        deleteCheburek(id) {
            axios.post(`http://localhost:8000/api/delete/${id}`)
                .then(res => {
                    this.getCheburek()
                })
        },
        isEdit(id) {
            return this.editCheburekId === id
        },
    }
}
</script>
