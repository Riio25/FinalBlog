<template>
    <div class="content">
        <h1 class="title">{{ msg }}</h1>

        <read-table v-if="showTable === true" v-bind:rows="rows"></read-table>
        <read-post v-else v-bind:body="body"></read-post>


    </div>
</template>


<script>
    import MyLayout from "../Layouts/MyLayout";
    import ReadTable from "@/Pages/ReadTable";
    import ReadPost from "@/Pages/ReadPost";

    export default {
        layout: MyLayout,
        components: {
            ReadTable,
            ReadPost
        },
        props: {
            rows: Array,
            showTable: Boolean,
            msg: String,
            body: String
        },
        name: "Read.vue",

        data(){
            return {

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
