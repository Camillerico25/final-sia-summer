<template>
    <h1 class="text-center">Diet Page</h1>
    <hr />
    <div class="container">
        <div class="d-flex align-content-between">
            <div class="card card-style" v-for="diet in diets" :key="diet.id">
                <div class="card-header">
                    <h5>food: {{ diet.food }}</h5>
                </div>
                <div class="card-body price">
                    <h6>
                        description: <strong>{{ diet.food }} </strong>
                    </h6>
                    <h6>
                        price: <strong>{{ diet.drinks }}</strong>
                    </h6>
                </div>
            </div>
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
        diets: Array,
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
