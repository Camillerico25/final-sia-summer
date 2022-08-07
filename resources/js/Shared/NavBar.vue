<template>
    <div class="sidebar bg-light m-2 shadow-lg p-2 bg-white center">
        <Link
            class="rounded p-2 links mr-1"
            :class="{ active: $page.component == 'Home' }"
            href="/"
            >Home
        </Link>

        <Link
            class="rounded p-2 mr-1"
            :class="{ active: $page.component == 'Diet' }"
            href="/diets"
            >Diet</Link
        >
        <Link
            class="rounded p-2 mr-1"
            :class="{ active: $page.component == 'Task' }"
            href="/tasks"
            >Task</Link
        >
    </div>

    <slot />
</template>
<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<script>
export default {
    data() {
        return {
            layout: false,
        };
    },
};
</script>

<style scoped>
.links {
}
.sidebar a.active {
    background-color: #292b2c;
    color: white;
    text-decoration: none;
}

.sidebar a:hover:not(.active) {
    background-color: gray;
    color: white;
    text-decoration: none;
}
.center {
    display: flex;
    align-items: center;
    justify-content: end;
}
</style>
