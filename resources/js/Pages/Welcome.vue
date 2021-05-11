<template>
    <nav></nav>
    <div class="content">
        <div class="header">
            <h1>{{ msg }}</h1>
            <p>What would you like to do?</p>
            <div class="menu-options">
                <a href="/write" data-ajax="false">Write</a> |
                <a href="/read">Read</a>
            </div>
            <!--            <router-view />-->
        </div>
    </div>
</template>

<script>
    import Nav from '@/Shared/Nav.vue'

    export default {
        components: Nav,
        data(){
            return {
                msg: "Welcome to Riio's Blog"
            }
        }
    };
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .content {
        margin-top: 60px;
        text-align: center;
    }
    .menu-options > a {
        /*color: #42b983;*/
        margin: 20px;
    }

    @import "CSS/main.css";
</style>
