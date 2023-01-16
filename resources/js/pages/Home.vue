<template>
    <div style="background-image:url('images/z2.JPG');" class="w-full h-screen bg-cover flex justify-center items-center ">
       <div class=" h-3/5 w-3/4  rounded-xl " style="background-color: rgba(0,0,0,0.5);">
            <div class="flex justify-between px-20 text-gray-300">
                <div class="text-5xl  grid gap-3 py-10 font-bold font-serif">
                    <h1 class="">  
                        TOURISME
                    </h1>
                    <h1 class="">
                        KONGO-CENTRAL RDC
                    </h1>
                </div>
                <!-- barre de recherche -->
                <div class="py-10  font-bold flex gap-2 text-gray-300">
                    <div v-show="voir">
                        <input type="search" name="" id="" class="h-8 text-black px-2 rounded-lg border-2 border-red-400 w-64 animate__animated animate__bounceInRight">
                    </div>
                    <p class="text-sm pt-1 cursor-pointer animate__animated animate__bounceInLeft" v-show="!voir">
                        RECHERCHE
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 hover:text-red-500 " @click="voir=!voir">
                    <path stroke-linecap="round" stroke-linejoin="round"  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-12   w-full h-32 gap-2  mb-5 px-20  pt-1">
                <div class=" col-span-5  bg-cover h-48 w-full rounded-md" style="background-image: url('images/v4.JPG'); background-repeat: no-repeat;" >
                   <button class="border-2 border-red-500 px-4 rounded-lg text-white bg-red-500   ">Ouvrir...</button>
                </div>
                <div class=" col-span-7 bg-cover   h-48 w-full rounded-md" style="background-image: url('images/z5.JPG'); background-repeat: no-repeat;" >
                   <button class="border-2 border-red-500 px-4 rounded-lg text-white bg-red-500   ">Ouvrir...</button>
                </div>
            </div>
       </div>
    </div>
    <div class="">
        <div class="px-40 py-6 ">
            <div class=" grid grid-cols-12">
                <div class=" col-span-5 flex items-center">
                    <div style="background-image: url('images/mb4.JPG'); background-size: cover;">
                        <h1 class="bg-white px-6 text-3xl font-serif font-bold mix-blend-lighten">
                           <span class="text-5xl">A</span>PROPOS <br> DU  KGC TOURISME 
                        </h1>
                    </div>
                </div>
                <div class="text-justify px-4 col-span-7 font-serif text-gray-400">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores cupiditate praesentium, expedita quasi magni saepe accusamus architecto quaerat facilis! Qui perspiciatis veniam optio temporibus modi ad voluptate amet impedit officiis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed eligendi magnam, explicabo ratione tenetur dolorum repudiandae molestiae labore voluptatem quaerat libero ducimus optio non, esse placeat maxime quis. Hic, repudiandae!
                    </p>
                    <a href="#" class="text-xs pt-3 text-red-500 flex justify-end">
                        En savoir plus ...
                    </a>
                </div>
            </div>
        </div>
        <div class=" bg-gray-200 ">
            <div class="px-40">
                <h1 class="text-2xl font-bold text-gray-600 px-4 py-6 font-serif text-center">
                    Quelques lieux où se trouvent nos Sites
                </h1>
                <LieuxSite/>
                <h1 class="text-2xl font-bold text-gray-600  font-serif mx-80 pb-2 pt-5 text-center border-2 border-b-red-500 ">
                   Nos sites touristiques
                </h1>
                <div class="grid grid-cols-12 gap-5 px-4 pt-5">
                    <div class="col-span-3">
                        <siteTouristique/>
                    </div>
                    <div class="col-span-3">
                        <siteTouristique/>
                    </div>
                    <div class="col-span-3">
                        <siteTouristique/>
                    </div>
                    <div class="col-span-3">
                        <siteTouristique/>
                    </div>
                </div>
                <div class="py-6">
                    <h1 class="text-2xl font-bold text-gray-600 font-serif px-4 text-center ">
                        Activités
                    </h1>
                </div>
                <ActSite/>
            </div>
         </div>
    </div>
</template>
<script>
    import LieuxSite from '../components/LieuxSite.vue';
    import siteTouristique from '../components/siteTouristique.vue';
    import ActSite from '../components/ActSite.vue';
    export default {
        name : 'Home',
        data() {
            return {
                voir : false,
            }
        },
        components : {
            LieuxSite,siteTouristique,ActSite
        }
    }
</script>
