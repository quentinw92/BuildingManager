<template>
    <Link :href="href" class="block py-3" :class="{'underline':active }">
        <slot />
    </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link,
    },

    props: ['href', 'active'],
}
</script>
