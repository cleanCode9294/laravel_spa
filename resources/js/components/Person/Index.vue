<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Job</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="person in people">
            <td>{{ person.id }}</td>
            <td><router-link :to="{name: 'person.show', params: { id: person.id }}">{{ person.name }}</router-link></td>
            <td>{{ person.age }}</td>
            <td>{{ person.job }}</td>
            <td>
                <router-link :to="{ name: 'person.edit', params: { id: person.id } }">Edit</router-link>
            </td>
            <td>
                <a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-outline-danger">Delete</a>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "Index",

    data() {
        return {
            people: null
        }
    },

    mounted() {
        this.getPeople()
    },

    methods: {
        getPeople(){
            axios.get('/api/people')
                .then(res =>{
                    this.people = res.data.data
                })
        },

        deletePerson(id){
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.getPeople()
                })
        }
    }
}
</script>

<style scoped>

</style>
