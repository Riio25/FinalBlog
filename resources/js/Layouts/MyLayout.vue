<template>
    <div id="nav-menu" class="nav">
        <a href="/" class="nav-options">Home</a>
        <a href="/login" class="nav-options">Login</a>
        <a href="/register" class="nav-options">Register</a>
    </div>
    <slot></slot>
</template>

<script>
export default {
    name: "MyLayout.vue"
}
</script>

<style scoped>
    #nav-menu {
        font-family: Avenir, Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
    }

    .nav {
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 10px;
        width: 100%;
    }

    .nav a {
        font-weight: bold;
        color: #2c3e50;
    }

    .nav-options {
        float: right;
        margin: 0 20px;
        text-decoration: none;
        padding: 10px;
    }
    a:hover {
        text-decoration: underline;
        background-color: lightgrey;
    }

</style>
