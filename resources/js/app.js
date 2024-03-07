import "./bootstrap";
import { createApp } from "vue";
import router from "./router";

import App from "./components/Index.vue";

import Alpine from "alpinejs";

if (window.location.pathname.includes("admin")) {
    window.Alpine = Alpine;
    Alpine.start();
} else {
    const app = createApp(App);
    app.use(router);
    app.mount("#app");
}
