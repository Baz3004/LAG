import { createApp } from "vue";
import App from './App.vue';
import router from './router';
import 'animate.css';

const app = createApp(App)
///app.config.globalProperties.$axiox = axios
app.use(router);
app.mount('#app');

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start()

