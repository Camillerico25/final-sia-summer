<template>
    <h1 class="text-center">Task Page</h1>
    <hr />
    <div class="container">
        <div class="d-flex align-content-between">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="task in tasks" :key="task.id">
                        <th scope="row"></th>
                        <td>{{ task.id }}</td>
                        <td>{{ task.task }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
import NavBar from "../Shared/NavBar.vue";
</script>
<script>
export default {
    layout: NavBar,
    props: {
        tasks: Array,
    },
};
</script>
<style scoped>
.card-style {
    width: 500px;
    height: 200px;
}
.price {
    position: absolute;
    bottom: 0px;
    right: 0px;
}
</style>
