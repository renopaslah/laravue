<template>

    <div>
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h4>TAMBAH POST</h4>
                <hr>
                <form @submit.prevent="storePost">
                    <div class="mb-3">
                        <label class="form-label">TITLE POST</label>
                        <input type="text" class="form-control" v-model="post.name" placeholder="Masukkan Title Post">
                        <div v-if="errors.name" class="mt-2 alert alert-danger">
                            {{ errors.name }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <inertia-link href="/posts" class="btn btn-md btn-warning me-2">KEMBALI</inertia-link>
                        <button type="submit" class="btn btn-primary btn-md shadow-sm">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>

<script>
    //import layout
    import LayoutApp from '../../Layouts/App.vue'

    import { reactive } from 'vue'
    import { Inertia } from '@inertiajs/inertia'
    import { Link } from '@inertiajs/inertia-vue3';

    export default {

        //layout
        layout: LayoutApp,

        //register Link di component
        components: {
            'inertia-link' : Link
        },

        //props
        props: {
            errors: Object
        },

        //define Composition Api
        setup() {

            //state posts
            const post = reactive({
                name: '',
            })

            //function storePost
            function storePost() {
                
                //define variable 
                let name   = post.name

                //send data
                Inertia.post('/posts/', {
                    name: name,
                })
             
            }

            return {
                post,
                storePost
            }

        }
    }
</script>