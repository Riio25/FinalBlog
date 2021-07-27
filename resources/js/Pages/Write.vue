<template>
    <div class="content">
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
                <button class="text-2xl" id="submit_btn" type="submit" :disabled="form.processing">Submit</button>
            </form>
        </div>
    </div>
</template>

<script>
import { useForm, usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';
import MyLayout from "../Layouts/MyLayout";

    export default {
        layout: MyLayout,
        computed: {},
        // mounted() { console.log(this.$page.props.xsrf_token) },
        setup(){
            const theForm = computed(() => usePage().props.value)
            const form = useForm({
                title: null,
                blogpost: null,
                // _token: this.$page.props.csrf_token,
            })
            const submit = () => {
                this.form
                    .transform(data => (
                        data
                    ))
                    .post(this.route('write'), {})

            }
            console.log(theForm);
            return  {form, submit}
        },

        data(){
            return {
                form: this.$inertia.form({
                    title: null,
                    blogpost: null
                }),
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
