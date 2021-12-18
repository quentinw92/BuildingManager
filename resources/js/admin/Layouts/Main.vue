<template>
    <div class="bg-gray-200 min-h-screen">
        <HeaderBar />
        <div class="flex">
            <SideBar/>
            <div class="flex-1 mt-5 px-5">
                <slot />
            </div>
        </div>
    </div>
</template>

<script>
import HeaderBar from "@admin/Components/HeaderBar";
import SideBar from "@admin/Components/SideBar";

export default {
    components: {SideBar, HeaderBar},
}
</script>
