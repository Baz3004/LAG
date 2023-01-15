<template>
   <Nav/>
   <Footer/>
</template>
<script>
import Nav from './Nav.vue';
import Footer from './Footer.vue';

export default {
    name :'app',
    components : {
        Nav,Footer
    }
}

</script>