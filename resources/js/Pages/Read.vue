<template>
    <div class="content">
        <h1 class="title">{{ msg }}</h1>

        <read-table v-bind:rows="rows"></read-table>

    </div>
</template>

<script>
    import MyLayout from "../Layouts/MyLayout";
    import ReadTable from "@/Pages/ReadTable";

    export default {
        layout: MyLayout,
        components: {
            ReadTable
        },
        props: {
            rows: Array
        },
        name: "Read.vue",

        data(){
            return {
                msg: "What would you like to read about?",

            }
        }
    }
</script>

<style scoped>
    .title{
        text-align: center;
    }

    @import "CSS/main.css";


</style>
