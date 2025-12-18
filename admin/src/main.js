import {createApp} from 'vue'
import './app.css'
import App from './App.vue'
import router from "./router/index.js";
import store from "./store";
import PrimeVue from 'primevue/config'
import Aura from '@primeuix/themes/aura'
import 'primeicons/primeicons.css'

const app = createApp(App);

app.use(store)
    .use(router)
app.use(PrimeVue, {
    theme: {
        preset: Aura, // Apply the Aura theme
        options: {
            darkModeSelector: false,
        },
    },
}).mount('#app');
