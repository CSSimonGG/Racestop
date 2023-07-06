import "./bootstrap";

import { createApp } from "vue";
import example from "./components/example-component.vue";
import footercomponent from "./components/footercomponent.vue";
import headercomponent from "./components/headercomponent.vue";

const app = createApp({
    components: {
        example,
        headercomponent,
        footercomponent,
    },
});

app.mount("#app");
