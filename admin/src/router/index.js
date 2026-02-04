import { createRouter, createWebHashHistory } from "vue-router";

import Test from "../views/Test.vue";

const routes = [
 {
    path: '/',
    name: 'Test',
    component: Test
 }
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
});

export default router;