<template>
   <navBar/>
   <LieuxSite/>
   <Footer></Footer>
</template>
<script>
import navBar from './components/navBar.vue';
import LieuxSite from './components/LieuxSite.vue';
import Footer from './components/Footer.vue';

export default {
    name :'App',
    components : {
        navBar,
        Footer,
        LieuxSite
    }
}
</script>