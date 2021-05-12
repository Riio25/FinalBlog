<template>
    <div class="content">
        <h1>{{ msg }}</h1>

    </div>
</template>

<script>
    import MyLayout from "../Layouts/MyLayout";

    export default {
        layout: MyLayout,
        name: "Read.vue",
        data(){
            return {
                msg: "What would you like to read about?"
            }
        }
    }
</script>

<style scoped>


</style>
