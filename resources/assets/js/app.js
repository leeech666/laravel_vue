
import Vue from 'vue'
import VueRouter from 'vue-router'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

Vue.use(VueRouter)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'
import p26 from './views/food'
import p260 from './views/food1'
import p261 from './views/food1'
import p262 from './views/food2'
import p263 from './views/food3'
import p264 from './views/food4'
import p265 from './views/food5'


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
		 {
            path: '/p26',
            name: 'p26',
            component: p261
        },
		
		{path: '/food',
name: 'food',
component: p26,
children:[
         
	  {
		  path: '/food1',
		  name: 'food1',
  component: p261
      },
        {
          path: '/food2',
          component: p262
        },
        {
          path: '/food3',
          component: p263
        },
      {
        path: '/food4',
        component: p264
      },
      {
        path: '/food5',
        component: p265
      },
      ]
},
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});