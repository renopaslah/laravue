<template>
    <div class="mt-3">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Dashboard
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <inertia-link href="/posts/create" class="btn btn-primary">Tambah</inertia-link>
                </div>
            </div>
        </div>
        
        <div class="page-body">
            <div class="card border-0 rounded shadow-sm">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">TITLE</th>
                            <th scope="col">CONTENT</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="post in posts" :key="post.id">
                            <td>{{ post.title }}</td>
                            <td>{{ post.content }}</td>
                            <td class="text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
//import layout
import LayoutApp from '../../Layouts/App.vue'

//import Link dari inertia
import { Link } from '@inertiajs/inertia-vue3';

export default {

    //layout
    layout: LayoutApp,

    //register Link di component
    components: {
        'inertia-link': Link
    },

    //props
    props: {
        posts: Array // <- nama props yang dibuat di controller saat parsing data
    }
}
</script>

<style></style>