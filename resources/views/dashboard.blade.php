<div>
    <x-app-layout class="bg-white">
        <div 
             x-data = "{
                tableau : [true,false,false,false,false,false],
                Afficher(nombre){
                    for(var i = 0;i < this.tableau.length;i++){
                        if(nombre == i){
                            this.tableau[i]=true;
                        }else{
                            this.tableau[i]=false;
                        }
                    }
                    console.log(this.tableau[nombre]);
                }
             }">
            <div class="flex">
                <div class="col-span-2 my-6"  style="background: #2b3643;color:#ababab;height:350px">
                    <div class="p-4 border-b-2 border-black hover:bg-gray-400 hover:text-black cursor-pointer" @click="Afficher(0)">LIEU</div>
                    <div class="p-4 border-b-2 border-black hover:bg-gray-400 hover:text-black cursor-pointer" @click="Afficher(1)">ACTIVITE</div>
                    <div class="p-4 border-b-2 border-black hover:bg-gray-400 hover:text-black cursor-pointer" @click="Afficher(2)">SITE</div>
                    <div class="p-4 border-b-2 border-black hover:bg-gray-400 hover:text-black cursor-pointer" @click="Afficher(3)">CONCTACT</div>    
                    <div class="p-4 border-b-2 border-black hover:bg-gray-400 hover:text-black cursor-pointer" @click="Afficher(4)">CONDITION</div>    
                    <div class="p-4 border-b-2 border-black hover:bg-gray-400 hover:text-black cursor-pointer" @click="Afficher(5)">DROIT ACTIVITE</div>    
                </div>
                 
                @livewireStyles
                <div class="">
                    <div>
                        <div x-show="tableau[0]==true" class="">
                            <livewire:admin.lieu>
                        </div>
                        <div x-show="tableau[1]==true" class="">
                                <livewire:admin.activite>
                        </div>
        
                        <div x-show="tableau[2]==true">
                            <livewire:admin.site>
                        </div>
        
                        <div x-show="tableau[3]==true">
                            <livewire:admin.contact>
                        </div>
        
                        <div x-show="tableau[4]==true">
                            <livewire:admin.condition>
                        </div>
        
                        <div x-show="tableau[5]==true">
                            <livewire:admin.droit-activite>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        @livewireScripts

                
    </x-app-layout>
</div> 
