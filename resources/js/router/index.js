import { createWebHistory, createRouter } from "vue-router";

// Les composants 
import Home from '../pages/Home.vue';
const routes =[
    {
        name :'Home',
        path : '/',
        component : Home
    },
    {
        name :'Site',
        path : '/site',
        component :() => import(/*webpackChunkName : "site" */ '../pages/Site.vue')
    },
    {
        name :'Activite',
        path : '/activite',
        component :() => import(/*webpackChunkName : "activite" */ '../pages/Activite.vue')
    },
    {
        name :'Contact',
        path : '/contact',
        component :() => import(/*webpackChunkName : "contact" */ '../pages/Contact.vue')
    },
    {
        name :'Apropos',
        path : '/apropos',
        component :() => import(/*webpackChunkName : "apropos" */ '../pages/Apropos.vue')
    },
]
const router = createRouter({
    history : createWebHistory(),
    routes
});

export default router
