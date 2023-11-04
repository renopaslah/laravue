<template>
    <div class="mt-3">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Tambah
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <inertia-link href="/posts" class="btn btn-primary">Kembali</inertia-link>
                </div>
            </div>
        </div>

        <div class="page-body">
            Tambah
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
}
</script>

<style></style>