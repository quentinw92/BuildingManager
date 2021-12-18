<template>
    <h1>Test</h1>

    {{ ResidentialComplexes }}
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
    },
    props: {
        'ResidentialComplexes': Array,
    }
}
</script>
