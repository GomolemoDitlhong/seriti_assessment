/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./config');

window.Vue = require('vue').default;
import axios from 'axios';
Vue.use(axios);

import { Line } from "vue-chartjs";
import { Pie } from "vue-chartjs";

// Vue Components
Vue.component('page-header-component', require('./components/layouts/PageHeaderComponent.vue').default);

Vue.component('link-dropdown-component', require('./components/menus/LinkDropdownComponent.vue').default);
Vue.component('link-component', require('./components/menus/LinkComponent.vue').default);
Vue.component('sub-menu-component', require('./components/menus/SubMenuComponent.vue').default);

Vue.component('summary-component', require('./components/SummaryComponent.vue').default);


Vue.component('pie-chart', require('./components/charts/PieChart.vue').default);
Vue.component('line-chart', require('./components/charts/LineChart.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
