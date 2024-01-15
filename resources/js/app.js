import './bootstrap';
import SaleCountdown from './components/SaleCountdown.vue';
Vue.component('sale-countdown', SaleCountdown);

import { createApp } from 'vue';

const app = createApp({});
app.component('sale-countdown', SaleCountdown);
app.mount('#app');
