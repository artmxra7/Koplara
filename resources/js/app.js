require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

// define routes for users
const routes = [
    {
        path: "/",
        name: "Playground",
        component: require("./components/playground/index.vue")
    }
];

const router = new VueRouter({ routes });

const app = new Vue({
    el: "#app",
    router
}).$mount("#app");
