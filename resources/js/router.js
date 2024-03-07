import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./components/Home.vue"),
        name: "home",
    },
    {
        path: "/category",
        component: () => import("./components/Category.vue"),
        name: "category",
    },
    {
        path: "/product",
        component: () => import("./components/Product.vue"),
        name: "product",
    },
    {
        path: "/cart",
        component: () => import("./components/Cart.vue"),
        name: "cart",
    },
    {
        path: "/contact",
        component: () => import("./components/Contact.vue"),
        name: "contact",
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
