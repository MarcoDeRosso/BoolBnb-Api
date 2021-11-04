<template>
<div class="container">
    <div v-for="apa in apartments" :key="apa.id">
        <h1>{{apa.id}} {{apa.title}}</h1>

    </div>
</div>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            this.getApartments() 
        },
        data() {
            return {
                apartments: []
            }
        },
        methods:{
            getApartments() {
                axios.get('http://127.0.0.1:8000/api/apartments').then((response)=>{
                    this.apartments = response.data.data
                })
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>