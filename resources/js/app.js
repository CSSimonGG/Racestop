import "./bootstrap";

import { createApp } from "vue";
import example from "./components/example-component.vue";
import headercomponent from "./components/HeaderComponent.vue";

const app = createApp({
    components: {
        example,
        headercomponent,
    },
});

app.mount("#app");
