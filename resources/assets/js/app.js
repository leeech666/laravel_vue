
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
            redirect:'/1-1',
            name: 'hello',
            component: Hello,
            children:[
		               	{ path:'/1',component:{template:'<div><div style="padding-left:350px"><router-link to="/1-1">&hearts;FRONT</router-link>&nbsp;&nbsp;&nbsp;&nbsp;<router-link to="/1-2">&hearts;SIDE</router-link>&nbsp;&nbsp;&nbsp;&nbsp;<router-link to="/1-3">&hearts;BACK</router-link></div><br><router-view></router-view></div>'},
               	children:[
                        	{path:'/1-1',component:{template:'<div><img src="/images/black1.jpg"></div>'}},
                        	{path:'/1-2',component:{template:'<div><img src="/images/black2.jpg"></div>'}},
                        	{path:'/1-3',component:{template:'<div><img src="/images/black3.jpg"></div>'}},
                         	]},
	                  {path:'/2',component:{template:'<div><div style="padding-left:350px"><router-link to="/2-1">&hearts;FRONT</router-link>&nbsp;&nbsp;&nbsp;&nbsp;<router-link to="/2-2">&hearts;SIDE</router-link>&nbsp;&nbsp;&nbsp;&nbsp;<router-link to="/2-3">&hearts;BACK</router-link></div><br><router-view></router-view></div>'},
              	children:[
                       	{path:'/2-1',component:{template:'<div><img src="/images/blue1.jpg"></div>'}},
                      	{path:'/2-2',component:{template:'<div><img src="/images/blue2.jpg"></div>'}},
	                      {path:'/2-3',component:{template:'<div><img src="/images/blue3.jpg"></div>'}},
	                       ]
	                       },
	                  {path:'/3',component:{template:'<div><img src="/images/lightblue1.jpg"></div>'}},
	                  {path:'/4',component:{template:'<div><img src="/images/purple1.jpg"></div>'}},
	                  {path:'/5',component:{template:'<div><img src="/images/red1.jpg"></div>'}},

			                ]

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
