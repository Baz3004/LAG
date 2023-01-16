<template>
   <navBar/>
   <Footer></Footer>
</template>
<script>
import navBar from './components/navBar.vue';
import Footer from './components/Footer.vue';

export default {
    name :'App',
    components : {
        navBar,
        Footer,
    }
}
window.onscroll = function (){
    scrollFunction()
};
document.addEventListener("DOMContentLoaded", function(event){
    
})
</script>