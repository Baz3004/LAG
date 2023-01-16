<template>
    <div class="nav bg-green-800 flex text-center justify-center gap-10">
        <router-link to="/">Home</router-link>
        <router-link to="/site">Site</router-link>
        <router-link to="/activite">Activite</router-link>
        <router-link to="/contact">Contact</router-link>
        <router-link to="/apropos">Apropos</router-link>
    </div>
    <router-view></router-view>
</template>
<script>
    export default {
        name : 'Nav'
    }
</script>