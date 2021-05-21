<template>
    <div class="content">
        <!-- What would you like to write about today? -->
        <h1 class="title">{{ msg }}</h1>
        <div class="form_container">
            <form id="blog-post" @submit.prevent="form.post('/write/submit')">
                <label for="post_title" class="" >Post Title</label>
                <input id="post_title" type="text" name="title" v-model="form.title" />
                <textarea
                    name="content"
                    id="blog-content"
                    cols="40"
                    rows="8"
                    placeholder="Start Writing..."
                    v-model="form.blogpost"
                ></textarea>
                <button id="submit_btn" type="submit" :disabled="form.processing">Submit</button>
            </form>
        </div>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
import MyLayout from "../Layouts/MyLayout";

    export default {
        layout: MyLayout,
        computed: {},
        setup(){
            const form = useForm({
                title: null,
                blogpost: null,
            })
            return  {form}
        },

        data(){
            return {
                msg: "What would you like to write about??"
            }
        }
    };



</script>

<style scoped>

    .form_container {
        max-width: 350px;
        margin: 0 auto;
    }
    .title {
        text-align: center;
    }
    label{
        display: block;
    }
    input {
        margin-bottom: 15px;
        width: 200px;
        height: 18px;
    }
    textarea {
        display: block;
        resize: none;
    }
    button {
        margin-top: 15px;
    }

    @import "CSS/main.css";
</style>
