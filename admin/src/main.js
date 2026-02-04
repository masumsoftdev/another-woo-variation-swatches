import { createApp } from 'vue'
import App from './App.vue'
import router from './router/index.js'

const avsfw = createApp(App);

avsfw.use(router);


avsfw.mount('#avsfw-admin-app');
