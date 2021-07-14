<template>
    <div class="content">
        <div class="header">
            <h1>{{ msg }}</h1>
            <p>What would you like to do?</p>
            <div class="menu-options">
                <inertia-link  href="/write" data-ajax="false">Write</inertia-link> |
                <inertia-link href="/read">Read</inertia-link>
            </div>
            <!--            <router-view />-->
        </div>
    </div>
</template>

<script>
    import MyLayout from '@/Layouts/MyLayout.vue'

    export default {
        layout: MyLayout,
        data(){
            return {
                msg: "Welcome to Riio's Blog"
            }
        }
    };
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .menu-options > a {
        color: #42b983;
        margin: 20px;
    }

    @import "CSS/main.css";
</style>
