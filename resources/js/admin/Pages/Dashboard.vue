<template>
    <MainLayout>
        <h1> Admin Dashboard </h1>
    </MainLayout>
</template>

<script>
import MainLayout from "@admin/Layouts/Main";
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
        MainLayout,
    },
    props: {
        'ResidentialComplexes': Array,
    }
}
</script>
