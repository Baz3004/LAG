<template>
    <h1>Site</h1>
    <LieuxSite/>
    <siteTouristique/>
</template>
<script>
import LieuxSite from '../components/LieuxSite.vue';
import siteTouristique from '../components/siteTouristique.vue';

    export default {
        name : 'Site',
        components : {
            LieuxSite,siteTouristique
        }

    }
</script>