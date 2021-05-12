<template>
    <div class="content">

        <form action="">
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" id="firstName">
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" id="lastName">
            <label for="email">Email Address:</label>
            <input type="text" name="email" id="email">
            <label for="userName">User Name:</label>
            <input type="text" name="userName" id="userName">
            <label for="password">Password:</label>
            <input type="text" name="password" id="password">
            <button type="submit">Confirm</button>

        </form>
    </div>

</template>

<script>
import MyLayout from "../Layouts/MyLayout";

export default {
    layout: MyLayout,
name: "Register.vue"
}
</script>

<style scoped>

</style>
