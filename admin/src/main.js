import { createApp } from 'vue'
import App from './App.vue'
import router from './router/index.js'

const avsfw = createApp(App);

avsfw.use(router);


alert()

avsfw.mount('#avsfw-admin-app');
