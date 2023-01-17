<template >
    <div class="fixed w-full px-2 ">
        <div class="flex justify-between px-40">
            <div class=" pt-2 opacity-75">
                <img src="images/logoa.png" alt="" srcset="" class="w-20 h-10  mt-2 ">
            </div>
            <div class="flex gap-10 text-gray-50  py-5 ">
                <router-link to="/" class="hover:text-red-400 hover:border-b-2 hover:border-b-red-500">Home</router-link>
                <router-link to="/site" class="hover:text-red-400 hover:border-b-2 hover:border-b-red-500">Site</router-link>
                <router-link to="/activite" class="hover:text-red-400 hover:border-b-2 hover:border-b-red-500">Activite</router-link>
                <router-link to="/apropos" class="hover:text-red-400 hover:border-b-2 hover:border-b-red-500">Apropos</router-link>
                <router-link to="/contact" class="hover:text-red-400 hover:border-b-2 hover:border-b-red-500">Contact</router-link>
                <router-link to="/recherche" class="hover:text-red-400 hover:border-b-2 hover:border-b-red-500">Recherche</router-link>
            </div>
        </div>
    </div>
    <router-view/>
</template>
<script>
    export default {
        name : 'Nav'
    }
</script>