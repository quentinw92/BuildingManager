<template>
    <div class="flex-no-shrink w-64 p-5 bg-blue-900 text-white min-h-screen-ex-header">
        <ul>
            <li>
                <NavLink :href="route('admin.dashboard')" :active="route().current('admin.dashboard')">
                    Dashboard
                </NavLink>
            </li>
            <li>
                <NavLink :href="route('admin.residential-complexes')" :active="route().current('admin.residential-complexes')">
                    Residential Complexes
                </NavLink>
            </li>
        </ul>
    </div>
</template>

<script>
import NavLink from "@admin/Components/NavLink";

export default {
    name: "SideBar",
    components: {
        NavLink,
    },
}
</script>

<style scoped>
    .min-h-screen-ex-header {
        min-height: calc(100vh - 4rem);
    }
</style>
