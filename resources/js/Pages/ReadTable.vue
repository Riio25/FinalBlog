<template>
    <table id="read_table">
        <thead>
        <tr>
            <th class="table-title">Title</th>
            <th class="table-author">Author</th>
            <th class="table-date">Date</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="row in rows">
            <td class="table-title"><inertia-link v-bind:href="'read/' + row.title" >{{row.title}}</inertia-link></td>
            <td class="table-author">{{row.author}}</td>
            <td class="table-date">{{row.date}}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    import Read from "@/Pages/Read";

    export default {
        name: "read-table.vue",
        props: ['rows'],
    }



</script>

<style scoped>

    table {
        margin: 0 auto;
        border-collapse: collapse;
        border: solid black 3px;
        table-layout: fixed;
    }
    thead{
        background: #42b983;
        border-bottom: 2px solid black;
        display: table-header-group;
    }
     thead tr .table-title, thead tr .table-author, thead tr .table-date {
         padding-top: 10px;
         padding-bottom: 10px;
    }

    .table-title{
        padding-right: 60px;
    }
    .table-author{
        padding-right: 40px;
    }
    tbody td {
        margin-bottom: 15px;
    }
    tbody tr td {
        padding-top: 10px;
    }
    tbody tr td:nth-child(odd){
        padding: 0 20px;
    }


    tr:nth-child(even){
        background: #a0aec0;
    }


</style>
