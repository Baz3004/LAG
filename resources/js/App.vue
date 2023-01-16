<template>
    <!-- Appel de la barre de navigation -->
    <navBar/>


    <!-- Appel du footer -->
    <Footer/>
</template>
    
<script>
    import navBar from './components/navBar.vue';
    import Footer from './components/Footer.vue';
    export default {
        name : 'app',
        components : {
           navBar,
           Footer
        }
    }
</script>