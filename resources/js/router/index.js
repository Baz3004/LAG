import { createWebHistory, createRouter } from "vue-router";

// Les composants 
import Home from '../pages/Home.vue';
import Site from '../pages/Site.vue';
import Activite from '../pages/Activite.vue';
import Contact from '../pages/Contact.vue';
import Apropos from '../pages/Apropos.vue';



const routes =[
    {
        name :'Home',
        path : '/',
        component : Home
    },
    {
        name :'Site',
        path : '/site',
        component : Site
    },
    {
        name :'Activite',
        path : '/activite',
        component : Activite
    },
    {
        name :'Contact',
        path : '/contact',
        component : Contact
    },
    {
        name :'Apropos',
        path : '/apropos',
        component : Apropos
    },
]
const router = createRouter({
    history : createWebHistory(),
    routes
});

export default router
