<template>
    <div style="background-image:url('images/z2.JPG');" class="w-full h-screen bg-cover flex justify-center items-center ">
       <div class=" h-3/5 w-3/4  rounded-xl " style="background-color: rgba(0,0,0,0.5);">
            <div class="flex justify-between px-20 text-gray-300">
                <div class="text-5xl  grid gap-3 py-10 font-bold">
                    <h1 class="">  
                        TOURISME
                    </h1>
                    <h1 class="">
                        KONGO-CENTRAL RDC
                    </h1>
                </div>
                <div class="py-10  font-bold flex gap-2 text-gray-300">
                    <input type="search" name="" id="" class="h-8 hidden text-black px-2 rounded-lg border-2 border-red-400 w-72 ">
                    <p class="text-sm pt-1 ">
                        RECHERCHE
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 hover:text-red-500 ">
                    <path stroke-linecap="round" stroke-linejoin="round"  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-12   w-full h-32 gap-2  mb-5 px-20  pt-1">
                <div class=" col-span-5  bg-cover h-48 w-full rounded-md" style="background-image: url('images/v4.JPG'); background-repeat: no-repeat;" >
                   <button class="border-2 border-red-500 px-4 rounded-lg text-white bg-red-500   ">Ouvrire...</button>
                </div>
                <div class=" col-span-7 bg-cover   h-48 w-full rounded-md" style="background-image: url('images/z5.JPG'); background-repeat: no-repeat;" >
                   <button class="border-2 border-red-500 px-4 rounded-lg text-white bg-red-500   ">Ouvrire...</button>
                </div>
            </div>
       </div>
    </div>
    <div class="px-40 py-10 bg-gray-200">
        <div class="">
            
        </div>
        <div class=" py-10 ">
            <LieuxSite/>
            <siteTouristique/>
            <ActSite/>
         </div>
    </div>
</template>
<script>
    import LieuxSite from '../components/LieuxSite.vue';
    import siteTouristique from '../components/siteTouristique.vue';
    import ActSite from '../components/ActSite.vue';
    export default {
        name : 'Home',
        components : {
            LieuxSite,siteTouristique,ActSite
        } 
    }
</script>
