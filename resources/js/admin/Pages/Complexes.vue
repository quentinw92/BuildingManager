<template>
    <MainLayout>
        <div class="bg-white rounded-lg p-5 shadow">
            <h3 class="text-lg font-bold">Residential Complexes</h3>

            <div class="mt-5">
                <div v-for="complex in ResidentialComplexes" :key="complex.id">
                    {{ complex.name }}
                </div>
            </div>
        </div>
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
