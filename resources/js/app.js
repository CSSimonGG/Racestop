import "./bootstrap";

import Example from "./components/example.vue";
import { createApp } from "vue";

const app = createApp({
    components: {
        Example,
    },
});

app.mount("#app");
